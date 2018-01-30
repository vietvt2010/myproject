@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../sebastian/phpdcd/phpdcd
php "%BIN_TARGET%" %*
