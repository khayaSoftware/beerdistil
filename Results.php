<?php if(isset($searchResults)): ?>
    <?php if($_POST["optrad"] === "brewery"): ?>;
    <section>
        <div class="row">
            <div class="container">
                <h1>Search Results</h1>
            <?php foreach($searchResults->data as $result): ?>
                <div class="row panel panel-default">
                    <div class="col-xs-12">
                        <h2><?= $result->name; ?></h2>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= $result->images->icon; ?>" class="img-responsive"/>
                    </div>
                    <div class="col-sm-8">
                        <p class="lead">
                            <?php if(isset($result->description)): ?>
                            <?= explode(".",$result->description)[0] ?>
                            <?php else:?>
                            <?= "Description Unavailable";?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </section>
    <?php elseif($_POST["optrad"] === "beer"): ?>;
    <section>
        <div class="row">
            <div class="container">
                <h1>Search Results</h1>

            <?php foreach($searchResults->data as $result): ?>
                <div class="row panel panel-default">
                    <div class="col-xs-12">
                        <h2><?= $result->name; ?></h2>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= $result->labels->icon; ?>" class="img-responsive"/>
                    </div>
                    <div class="col-sm-8">
                        <p class="lead">
                            <?php if(isset($result->description)): ?>
                            <?= explode(".",$result->description)[0]?>
                            <?php else:?>
                            <?= "Description Unavailable";?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    
<?php endif; ?>

<?php if(!isValid($_POST["search"])):?>
    <section>
        <div class="row">
            <div class="container">
                <div class="alert alert-danger">
                    <strong>Error!</strong> Invalid input
                    
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>