<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Tenders</title>
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" as="style" type="text/css" onload="this.rel='stylesheet'" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.0.3/jsoneditor.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.0.3/jsoneditor.min.js"></script>
</head>

<body class="p-2">
    <div class="container text-center">
        <h1>Update Tenders</h1>
        <div class="alert alert-danger d-none fixed-top font-weight-bold" role="alert" id="error">
            Please correct errors before submitting!
        </div>
        <div class="alert alert-success d-none fixed-top font-weight-bold" role="alert" id="success">
            All changes have been updated succesfully!
        </div>
        <div class="alert alert-danger d-none fixed-top font-weight-bold" role="alert" id="error">
            Something went wrong, changes could not be saved. Please try again in some time.
        </div>
        <div class="text-left my-4" id="jsoneditor" style="height: 75vh"></div>
        <button id="submit" class="btn btn-lg btn-primary">Save and Update!</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
            const res = await fetch('public/json/tender.json');
            const tenders = await res.json();
            const editor = new JSONEditor(container, {
                mode: 'tree',
                name: 'tenders',
                enableSort: false,
                enableTransform: false,
                limitDragging: true,
                schema: {
                    type: "array",
                    items: {
                        type: "object",
                        properties: {
                            title: {
                                type: "string"
                            },
                            tenderNo: {
                                type: "string"
                            },
                            date: {
                                type: "string"
                            },
                            lastDate: {
                                type: "string"
                            },
                            noticeURL: {
                                type: "string"
                            }
                        },
                        minProperties: Object.keys(tenders[0]).length,
                        maxProperties: Object.keys(tenders[0]).length,
                        required: ["title", "tenderNo", "date", "lastDate", "noticeURL"]
                    }
                },
                onValidate: function(tenders) {
                    var errors = [];
                    for (let i = 0; i < tenders.length; i++) {
                        var tender = tenders[i];
                        Object.values(tender).forEach(val => {
                            if (val.trim() === "") {
                                errors.push({
                                    path: [i],
                                    message: `"${Object.keys(tender)[Object.values(tender).indexOf(val)]}" field cannot be blank.`
                                });
                            }
                        })
                    }
                    return errors;
                }
            });
            editor.set(tenders);
            editor.expandAll();
            document.querySelector('button#submit').addEventListener('click', () => {
                if (hasSchemaOrParseErrors()) {
                    document.querySelector("#error").classList.remove('d-none');
                    setTimeout(function() {
                        document.querySelector("#error").classList.add('d-none');
                    }, 2000)
                } else {
                    var newJson = editor.get();
                    $.ajax({
                        type: "POST",
                        url: "public/json/update.php",
                        dataType: 'json',
                        data: {
                            json: JSON.stringify(newJson),
                            fileName: 'tender.json'
                        },
                        cache: false,
                        success: function(res) {
                            if (res) {
                                document.querySelector("#success").classList.remove('d-none');
                                setTimeout(function() {
                                    document.querySelector("#success").classList.add('d-none');
                                }, 2000);
                            } else {
                                document.querySelector("#error").classList.remove('d-none');
                                setTimeout(function() {
                                    document.querySelector("#error").classList.add('d-none');
                                }, 2000);
                            }
                        }
                    });
                }
            })
        })();
    </script>
</body>

</html>