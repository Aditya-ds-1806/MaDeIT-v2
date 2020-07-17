<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update People</title>
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" as="style" type="text/css" onload="this.rel='stylesheet'" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.0.3/jsoneditor.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.0.3/jsoneditor.min.js"></script>
</head>

<body class="p-2">
    <div class="container text-center">
        <h1>Update People</h1>
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
            const res = await fetch('public/json/people.json');
            const people = await res.json();
            const editor = new JSONEditor(container, {
                mode: 'tree',
                name: 'People',
                enableSort: false,
                enableTransform: false,
                limitDragging: true,
                schema: {
                    type: "object",
                    properties: {
                        directors: {
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
                                    image: {
                                        type: "string"
                                    }
                                },
                                minProperties: Object.keys(people.directors[0]).length,
                                maxProperties: Object.keys(people.directors[0]).length,
                                required: Object.keys(people.directors[0])
                            }
                        },
                        advisoryBoard: {
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
                                    image: {
                                        type: "string"
                                    }
                                },
                                minProperties: Object.keys(people.advisoryBoard[0]).length,
                                maxProperties: Object.keys(people.advisoryBoard[0]).length,
                                required: Object.keys(people.advisoryBoard[0])
                            }
                        }
                    },
                    minProperties: Object.keys(people).length,
                    maxProperties: Object.keys(people).length,
                    required: Object.keys(people),
                },
                onValidate: function(people) {
                    var errors = [];
                    Object.keys(people).forEach(unit => {
                        for (let i = 0; i < people[unit].length; i++) {
                            const person = people[unit][i];
                            Object.values(person).forEach(val => {
                                if (val.trim() === "") {
                                    console.log(val);
                                    errors.push({
                                        path: [unit, i],
                                        message: `"${Object.keys(person)[Object.values(person).indexOf(val)]}" field cannot be blank.`
                                    });
                                }
                            });
                        }
                    });
                    return errors;
                }
            });
            editor.set(people);
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
                            fileName: 'people.json'
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