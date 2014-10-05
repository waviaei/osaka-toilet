<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="http-equiv" content="Content-type: text/html; charset=UTF-8"/>

        <title>Welcome!</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="/xmlrpc.php">

        <!-- wp-mobile-app-example のコード -->
        <!--
        <link rel='stylesheet' id='ui-kit-css-css' href='/wp-content/themes/osaka-toilet/uikit-2.8.0/css/uikit.min.css?ver=2.8.0' type='text/css' media='all' />
        <script type='text/javascript' src='/wp-includes/js/jquery/jquery.js?ver=1.11.0'></script>-->
        <script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='/wp-content/themes/osaka-toilet/uikit-2.8.0/js/uikit.min.js?ver=2.8.0'></script>
        <script type='text/javascript' src='/wp-content/themes/osaka-toilet/js/jquery.sparql.js?ver=2.8.0'></script>
        <script type='text/javascript' src='/wp-content/themes/osaka-toilet/js/urlEncode.js?ver=2.8.0'></script>


        <!-- Leaflet Sample のコード -->
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.css" />
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/wp-content/themes/osaka-toilet/leaflet/css/bootstrap-modal.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.ie.css" /><![endif]-->
        <link rel="stylesheet" href="/wp-content/themes/osaka-toilet/leaflet/css/MarkerCluster.css" />
        <link rel="stylesheet" href="/wp-content/themes/osaka-toilet/leaflet/css/MarkerCluster.Default.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="../dist/MarkerCluster.Default.ie.css" /><![endif]-->
        <link rel="stylesheet" href="/wp-content/themes/osaka-toilet/leaflet/css/leaflet.label.css" />
        <link rel="stylesheet" href="/wp-content/themes/osaka-toilet/leaflet/css/screen.css" />

        <link rel="stylesheet" href="/wp-content/themes/osaka-toilet/style.css" />
    </head>
    <body>

<!-- START copied from SPARQL sample -->
    <h1><img id="toilet-image" src="/wp-content/themes/osaka-toilet/toilet.jpg" /></h1>
    <ul id="posts"></ul>
    <div id="map"></div>
    <div id="filter-container">
        <form class="form-search" class="noSelect" onSubmit="addSparqlJsonMarkers(); return false;">
            <a href="#" id="clear" class="leaflet-popup-close-button">&#215;</a>
            <div class="input-append">
                <input type="text" id="filter-string" class="input-medium search-query search-box" autocomplete="off">
                <button type="submit" class="btn search-box"><i class="icon-search"></i></button>
                <!-- <span class="add-on">
                </span> -->
            </div>
        </form>
        <div id="search-results" class="leaflet-control-attribution leaflet-control pull-right"></div>
    </div>
<!-- END copied from SPARQL sample -->


<!-- START wp-mobile-app-example のオリジナルのコード -->
<!--
        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="layouts_frontpage.html">Brand</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-active">
                        <a href="/">Frontpage</a>
                    </li>
                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
            </nav>


            <hr class="uk-grid-divider">

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <h1>My Posts</h1>
                    <ul id="posts"></ul>
                </div>

                <div class="uk-width-medium-1-2">
                    <h1>Open Data</h1>
                    <ul id="posts"></ul>
                </div>
            </div>

        </div>
-->
<!-- END wp-mobile-app-example のオリジナルのコード -->

    <!-- Leaflet Sample のコード -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="http://uedayou.net/SPARQLTimeliner/js_sparql/sparql.js"></script>
    <script src="/wp-content/themes/osaka-toilet/leaflet/js/bootstrap-modalmanager.js"></script>
    <script src="/wp-content/themes/osaka-toilet/leaflet/js/bootstrap-modal.js"></script>
    <script src="/wp-content/themes/osaka-toilet/leaflet/js/leaflet.markercluster.js"></script>
    <script src="/wp-content/themes/osaka-toilet/leaflet/js/leaflet.label.js"></script>
    <script src="/wp-content/themes/osaka-toilet/leaflet/config.js"></script>
    <script src="/wp-content/themes/osaka-toilet/leaflet/js/app.js"></script>

        <!-- wp-mobile-app-example のコード。 -->
        <script type='text/javascript' src='/wp-content/themes/osaka-toilet/js/main.js?ver=2.8.0'></script>


    </body>
</html>
