<?php

echo 'Hello from host:' . getenv('HOSTNAME');
echo "\n\nLatest commit: " . getenv('GIT_COMMIT');