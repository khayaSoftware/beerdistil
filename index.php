<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php require_once("searchandrandom.php"); ?>


<section>
    <div class="row">
        <div class="container">
            <h1>Distilled SCH Beer Application</h1>

            <div class="row panel panel-default">
                <div class="col-xs-12">
                    <h2><?= $randomBeer->data->name; ?></h2>
                </div>
                <div class="col-md-4">
                    <img src="<?= $randomBeer->data->labels->medium; ?>" class="img-responsive"/>
                </div>
                <div class="col-sm-8">
                    <p class="lead">
                        <?= $randomBeer->data->description; ?>
                    </p>
                </div>
                <div class="col-xs-12 center-block">
                    <br/>
                    <br/>
                    <a class="btn btn-lg btn-info" href="index.php?random=true">Another Beer!</a>
                    <a class="btn btn-lg btn-info" href="brewery.php?beer_id=<?= $beer_id; ?>" target="_blank">More From This Brewery</a>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="container">
            <h1>Search</h1>
            
            <form id="formSearch" class="form-inline" action="index.php" method="post">
                <div class="form-group">
                    <input name="search" type="search" placeholder="Search..." class="form-control" id="search">
                </div>
                <div class="radio">
                    <label><input type="radio" name="optrad" value="beer" checked> Beer</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optrad" value="brewery"> Brewery</label>
                </div>
                <button type="submit" class="btn btn-lg btn-info">Search</button>
            </form>
        </div>
    </div>
</section>

<?php require_once('Results.php'); ?>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
