<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php require_once('breweryinfo.php'); ?>

<section>
    <div class="row">
        <div class="container">
            <div class="col-xs-12">
                <h1>Beers By <?= $brewery_name; ?></h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="container">
            <?php foreach($beers as $beer): ?>
            <div class="row panel panel-default">
                <div class="col-xs-12">
                    <h2><?= $beer->name; ?></h2>
                </div>
                <div class="col-md-3">
                    <img src="<?= $beer->labels->medium; ?>" class="center-block img-responsive"/>
                </div>
                <div class="col-md-9">
                    <p class="lead">
                        <?php if(isset($beer->description)): ?>
                            <?= $beer->description; ?>
                        <?php else:?>
                            <?= "Description Unavailable";?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-xs-12">
                <hr/>                
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>