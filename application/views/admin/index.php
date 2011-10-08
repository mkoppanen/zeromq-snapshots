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
            
            <div id="admin-section">
                
                <?php if (!empty ($errors)): ?>
                    <p class="message">Some errors were encountered, please check the details you entered.</p>
                    <ul class="errors">
                    <?php foreach ($errors as $message): ?>
                        <li><?php echo $message ?></li>
                    <?php endforeach ?>
                    </ul>
                <?php endif ?>
                
                <form name="upload" method="post" enctype="multipart/form-data" action="">
                    <ul>
                        <li>
                            <?php foreach ($model->get_operating_systems () as $key => $label): ?>
                            
                                <input type="radio" name="os" value="<?= $key ?>" /> <?= $label ?><br/>
                                <ul>
                                    <?php foreach ($model->get_versions ($key) as $version): ?>
                                    <li>
                                        <input type="radio" name="version" value="<?= $version ?>" /> <?= $version ?><br/>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endforeach ?>
                        </li>
                        <li>
                            <input type="file" name="file" id="file" />
                        </li>
                        <li>
                            <input type="submit" name="submit" value="Submit" />
                            <input type="hidden" name="message" value="1" />
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
