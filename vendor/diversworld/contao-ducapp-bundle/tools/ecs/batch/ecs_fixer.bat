:: Run easy-coding-standard (ecs) via this batch file inside your IDE e.g. PhpStorm (Windows only)
:: Install inside PhpStorm the  "Batch Script Support" plugin
cd..
cd..
cd..
cd..
cd..
cd..
php vendor\bin\ecs check vendor/diversworld/contao-ducapp-bundle/src --fix --config vendor/diversworld/contao-ducapp-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-ducapp-bundle/contao --fix --config vendor/diversworld/contao-ducapp-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-ducapp-bundle/config --fix --config vendor/diversworld/contao-ducapp-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-ducapp-bundle/templates --fix --config vendor/diversworld/contao-ducapp-bundle/tools/ecs/config.php
php vendor\bin\ecs check vendor/diversworld/contao-ducapp-bundle/tests --fix --config vendor/diversworld/contao-ducapp-bundle/tools/ecs/config.php
