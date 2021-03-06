﻿
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Country Selector - Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="<?php echo base_url();?>Assets/css/jquery-countryselector.min.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
    <div class="container">
        <section>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Showing country flags (experimental)
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <code>
                                &lt;select data-role=&quot;country-selector&quot; data-show-flag=&quot;true&quot;&gt;&lt;/select&gt;
                            </code>
                            <hr />
                            <select data-role="country-selector" data-show-flag="true"></select>
                        </div>
                        <div class="col-md-6">
                            <code>
                                &lt;select id=&quot;flag&quot;&gt;&lt;/select&gt;
                            </code>
                            <br />
                            <code>
                                $(&quot;#flag&quot;).countrySelector({ showFlag: true });
                            </code>
                            <hr />
                            <select id="flag"></select>
                            <script>
                                $(document).ready(function () {
                                    $("#flag").countrySelector({ showFlag: true });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            &copy; <a href="https://www.linkedin.com/in/jacqueskang" target="_blank">Jacques KANG</a> 2015
        </footer>
    </div>
    <script src="<?php echo base_url();?>Assets/js/jquery.countryselector.js"></script>
</body>
</html>
