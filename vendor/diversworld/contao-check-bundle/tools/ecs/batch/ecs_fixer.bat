:: Run easy-coding-standard (ecs) via this batch file inside your IDE e.g. PhpStorm (Windows only)
:: Install inside PhpStorm the  "Batch Script Support" plugin
cd..
cd..
cd..
cd..
cd..
cd..
php vendor\bin\ecs check vendor/diversworld/contao-check-bundle/src --fix --config vendor/diversworld/contao-check-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-check-bundle/contao --fix --config vendor/diversworld/contao-check-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-check-bundle/config --fix --config vendor/diversworld/contao-check-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-check-bundle/templates --fix --config vendor/diversworld/contao-check-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-check-bundle/tests --fix --config vendor/diversworld/contao-check-bundle/tools/ecs/config.php
