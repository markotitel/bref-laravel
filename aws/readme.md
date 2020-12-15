aws cloudformation package         --profile marko-bwl         --region us-east-1         --template-file web-app.yml         --s3-bucket cloudformation-marko-bwl        --output-template-file web.yaml

aws cloudformation deploy         --profile marko-bwl          --region us-east-1         --template-file web.yaml           --stack-name laravel-bref-dev     --parameter-overrides                 Env=dev         --capabilities CAPABILITY_NAMED_IAM 
