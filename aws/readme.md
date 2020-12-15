Deploys sample Bref php app.


aws cloudformation package \
    --profile ${AWS_PROFILE} \
    --region us-east-1 \
    --template-file web-app.yml \
    --s3-bucket ${BUCKET_FOR_COMPILED_CLOUDFORMATION} \
    --output-template-file web.yaml

aws cloudformation deploy \
    --profile ${AWS_PROFILE} \
    --region us-east-1 \
    --template-file web.yaml \
    --stack-name ${CF_STACK_NAME} \
    --parameter-overrides \
      Env=dev \
    --capabilities CAPABILITY_NAMED_IAM 
