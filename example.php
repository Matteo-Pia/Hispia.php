<!doctype html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>addel Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" style="max-width: 1000px">

    <div class="col-sm-5 col-sm-offset-2">

            <form class="addel">

                <h2>
                    People
                    <small>
                        Traditional options
                    </small>
                </h2>

                <div class="form-group addel-target">
                    <label for="person" class="control-label">
                        Person
                    </label>
                    <div class="input-group">
                       <select class="form-control" id="TratmentList02" >
                        <?php include ('procedure.php') ?>
                    </select>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-danger addel-delete">
                                <i class="fa fa-remove">

                                </i>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-success btn-block addel-add">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="addel.jquery.js"></script>

<script>
    $(document).ready(function () {
        $('.addel').addel({
            events: {
                added: function (event) {
                    console.log('Added ' + event.added.length);
                }
            }
        }).on('addel:delete', function (event) {
            if (!window.confirm('Conferma di voler eliminare la selezione ' + '"' + event.target.find(':input').val() + '"?')) {
                console.log('Deletion prevented!');
                event.preventDefault();
            }
        });
    });
</script>

</body>
</html>
