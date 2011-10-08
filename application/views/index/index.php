<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
<head profile="http://dublincore.org/documents/dcq-html/">
    <title>The Intelligent Transport Layer - Snapshots</title>
    <style type="text/css">
        @import url('<?= url::base () ?>static/css/style.css');
    </style>
</head>
<body>
    <div id="page-content">
        <div id="page-wrapper">
            
            <div id="header">
                <h1>
                    <a href="/">
                        <span>zeromq</span>
                    </a>
                </h1>
            </div>
            
            <h2> Snapshots </h2>
            
            <div id="snapshot-list">
                <?php foreach ($model->get_operating_systems () as $key => $label): ?>
                    <h3> 
                        <span>Ø</span> <?= $label ?>
                    </h3>
                    <ul>
                        <?php foreach ($model->get_versions ($key) as $version): ?>
                            <?php if ($build = $model->get_latest_build ($key, $version)): ?>
                                <li>
                                    <?php $download_url = sprintf ('%sdownload/%s/%s/%s',
                                                                    url::base (),
                                                                    $key,
                                                                    $version,
                                                                    basename ($model->get_build_file ($key, $version))); ?>

                                    <a href="<?= $download_url ?>"><?= $version ?></a> 
                                    - 
                                    <?= $build ['time'] ?>
                                </li>
                                
                            <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                    
                <?php endforeach ?>
            </div>
        </div>
    </div>
</body>
</html>
