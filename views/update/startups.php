<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Startups</title>
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" as="style" type="text/css" onload="this.rel='stylesheet'" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.0.3/jsoneditor.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.0.3/jsoneditor.min.js"></script>
</head>

<body class="p-2">
    <div class="container text-center">
        <h1>Update Startups</h1>
        <div id="message" class="alert alert-info fixed-top font-weight-bold d-none" role="alert">
        </div>
        <div class="alert alert-danger d-none fixed-top font-weight-bold" role="alert" id="error">
            Please correct errors before submitting!
        </div>
        <div class="alert alert-success d-none fixed-top font-weight-bold" role="alert" id="success">
            All changes have been updated succesfully!
        </div>
        <div class="alert alert-danger d-none fixed-top font-weight-bold" role="alert" id="fail">
            Something went wrong, changes could not be saved. Please try again in some time.
        </div>
        <form id="form" class="text-left my-5">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="ongoing" name="ongoing" class="custom-control-input" required>
                <label class="custom-control-label" for="ongoing">Ongoing</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="graduated" name="ongoing" class="custom-control-input" required>
                <label class="custom-control-label" for="graduated">Graduated</label>
            </div>
            <div class="input-group mt-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" accept=".png, .jpg, .jpeg, .svg" name="file" id="inputGroupFile02" onchange="$(this).next('.custom-file-label').html($(this).val()); $('#name').val($(this).val())" required>
                    <label id="fileName" class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload logo of company</label>
                </div>
                <div class="input-group-append">
                    <button id="upload" type="submit" class="btn btn-primary">
                        Upload
                        <span class="spinner-border d-none" id="upload-spinner" role="status" style="width:1em; height:1em"></span>
                    </button>
                </div>
            </div>
            <small class="text-muted">Please note that the maximum file size is 2MB.</small>
        </form>
        <div class="text-left my-4" id="jsoneditor" style="height: 75vh"></div>
        <button id="submit" class="btn btn-lg btn-primary mb-5">
            <span>Save and Update!</span>
            <span class="spinner-border d-none" id="saveSpinner" role="status" style="width:1em; height:1em"></span>
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $("#form").on('submit', function(e) {
            e.preventDefault();
            $("#upload-spinner").removeClass('d-none');
            var form = $('#form')[0];
            var formData = new FormData(form);
            if ($('#ongoing')[0].checked) formData.append("target-dir", "/images/startups/ongoing/");
            if ($('#graduated')[0].checked) formData.append("target-dir", "/images/startups/graduated/");
            $.ajax({
                type: "POST",
                url: "public/uploadFile.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    $("#message").text(res);
                    $("#message").removeClass('d-none');
                    $("#upload-spinner").addClass('d-none');
                    setTimeout(function() {
                        $("#message").addClass('d-none');
                    }, 4000)
                },
                error: function() {
                    $('#upload-spinner').removeClass('d-none');
                    document.querySelector("#message").classList.remove('d-none');
                    document.querySelector("#message").textContent = "Request timeout, check your internet connection";
                }
            });
        });
    </script>
    <script>
        function hasSchemaOrParseErrors() {
            var errorCls = ["jsoneditor-validation-error-icon", "jsoneditor-schema-error"];
            var hasSchemaError = false;
            for (var i = 0; i < errorCls.length && !hasSchemaError; i++) {
                var es = document.getElementsByClassName(errorCls[i]);
                if (es != null && es.length > 0) {
                    for (var j = 0; j < es.length; i++) {
                        var e = es[j];
                        if (e.style.display != 'none') {
                            hasSchemaError = true;
                            break;
                        }
                    }
                }
            }
            return hasSchemaError;
        }
    </script>
    <script>
        (async function() {
            const container = document.getElementById("jsoneditor");
            const res = await fetch('public/json/startups.json');
            const startups = await res.json();
            const editor = new JSONEditor(container, {
                mode: 'tree',
                name: 'startups',
                enableSort: false,
                enableTransform: false,
                limitDragging: true,
                schema: {
                    type: "object",
                    properties: {
                        tags: {
                            type: "array",
                            items: {
                                type: "string"
                            }
                        },
                        companies: {
                            type: "array",
                            items: {
                                type: "object",
                                properties: {
                                    name: {
                                        type: "string"
                                    },
                                    description: {
                                        type: "string"
                                    },
                                    logo: {
                                        type: "string"
                                    },
                                    website: {
                                        type: "string"
                                    },
                                    tag: {
                                        type: "string",
                                    },
                                    status: {
                                        type: "string",
                                        enum: ["ongoing", "graduated"]
                                    },
                                    seedSupport: {
                                        type: "boolean"
                                    }
                                },
                                minProperties: Object.keys(startups.companies[0]).length,
                                maxProperties: Object.keys(startups.companies[0]).length,
                                required: ["name", "description", "fileName", "tag", "status", "seedSupport"]
                            }
                        },
                    },
                    minProperties: Object.keys(startups).length,
                    maxProperties: Object.keys(startups).length,
                    required: ["tags", "companies"]
                },
                onValidate: function(startups) {
                    var errors = [];
                    if (Object.keys(startups).length === 0) return errors;
                    for (let i = 0; i < startups.companies.length; i++) {
                        var startup = startups.companies[i];
                        for (let j = 0; j < Object.values(startup).length; j++) {
                            const val = Object.values(startup)[j];
                            if (val === '' && Object.keys(startup)[j] === "website") break;
                            if (typeof val !== "boolean" && val.trim() === "") {
                                errors.push({
                                    path: ['companies', i],
                                    message: `"${Object.keys(startup)[Object.values(startup).indexOf(val)]}" field cannot be blank.`
                                });
                            }
                        }
                    }
                    return errors;
                }
            });
            editor.set(startups);
            editor.expandAll();
            document.querySelector('button#submit').addEventListener('click', () => {
                $('#saveSpinner').removeClass('d-none');
                if (hasSchemaOrParseErrors()) {
                    document.querySelector("#error").classList.remove('d-none');
                    setTimeout(function() {
                        document.querySelector("#error").classList.add('d-none');
                    }, 4000)
                } else {
                    var newJson = editor.get();
                    $.ajax({
                        type: "POST",
                        url: "public/json/update.php",
                        dataType: 'json',
                        data: {
                            json: JSON.stringify(newJson),
                            fileName: 'startups.json'
                        },
                        cache: false,
                        success: function(res) {
                            $('#saveSpinner').addClass('d-none');
                            if (res) {
                                document.querySelector("#success").classList.remove('d-none');
                                setTimeout(function() {
                                    document.querySelector("#success").classList.add('d-none');
                                }, 4000);
                            } else {
                                document.querySelector("#fail").classList.remove('d-none');
                                setTimeout(function() {
                                    document.querySelector("#fail").classList.add('d-none');
                                }, 4000);
                            }
                        },
                        error: function() {
                            $('#saveSpinner').addClass('d-none');
                            document.querySelector("#message").classList.remove('d-none');
                            document.querySelector("#message").textContent = "Request timeout, check your internet connection";
                            setTimeout(function() {
                                document.querySelector("#message").classList.add('d-none');
                            }, 4000);
                        }
                    });
                }
            })
        })();
    </script>
</body>

</html>