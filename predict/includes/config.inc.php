<?php

// Enter the Google Maps API for your site
define("GMAPS_API_KEY", "AIzaSyBHpXuC29X08pdyakBbRd8YMF4id1ARsBs");

// Who should we email about errors etc?
define("ADMIN_EMAIL", "dontcare@givea.com");

define("LOCATION_SAVE_ENABLE", true);

// Path to the root of the git repo inc. trailing /
define("ROOT", "/Users/dgregory/dev/erft/blueberry/cusf-standalone-predictor/");

// Path to python virtualenv to use
// define("PYTHON", ROOT . "ENV/bin/python");

// Path to prediction data dir from predict/
define("PREDS_PATH", "preds/");

// Filenames used by the predictor
define("SCENARIO_FILE", "scenario.ini");
define("FLIGHT_CSV", "flight_path.csv");
define("PROGRESS_JSON", "progress.json");
define("LOG_FILE", "py_log");

?>
