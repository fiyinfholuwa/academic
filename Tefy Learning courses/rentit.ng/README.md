Setup
References:
Trigger: https://sandymadaan.wordpress.com/2019/12/27/auto-deploying-laravel-app-on-google-cloud-run/
Deploy https://blog.devops.dev/how-to-deploy-a-laravel-application-on-google-cloud-run-using-cloud-build-with-build-command-16df632962f2

CLI
install google cloud cli https://cloud.google.com/sdk/docs/install
add to environmental variables "C:\Program Files (x86)\Google\Cloud SDK\google-cloud-sdk\bin"

run commands
#gcloud config set project rentit-416303
#set PROJECT_ID="$(gcloud config get-value project -q)"
#set _CLOUD_RUN_SERVICE="rentit-a1"

Setup Environmental variables

https://cloud.google.com/run/docs/configuring/services/environment-variables#yaml

deploy
gcloud builds submit
or push to main branch on repo

For local development
https://cloud.google.com/run/docs/testing/local#gcloud-cli

gcloud beta code dev --dockerfile=PATH_TO_DOCKERFILE --application-default-credential



