Deploys sample Bref php app. Zipped archive provided `src/bref.zip` in case PHP tools not present on deployment machine.


### This template creates:
- HTTP ApiGateway with "default" route
- Storage Bucket
- Assets bucket (Laravel assets stored in public/)
- Cloudfront origin identity for assets access only from CloudFront
- Lambda functions for WEB/QUEUE/CONSOLE/CUSTOM EVENTS
- SQS queue
- DeadLetter SQS Queue
- DeadLetter Queue for CUSTOM EVENTS Lambda
- CloudFront Distribution
- IAM Role for Lambda (`S3:*`, `SQS:*`)
- Log groups for all applicable resources


```
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
```
