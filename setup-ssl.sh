#!/bin/bash

# Load environment variables from .env
if [ -f .env ]; then
  source .env
else
  echo "Error: .env file not found. Please copy .env.example to .env and fill in the details."
  exit 1
fi

if [ -z "$CERTBOT_EMAIL" ] || [ -z "$CERTBOT_DOMAIN" ]; then
  echo "Error: CERTBOT_EMAIL and CERTBOT_DOMAIN must be set in .env"
  exit 1
fi

docker run --rm \
  -v $(pwd)/certbot/conf:/etc/letsencrypt \
  -v $(pwd)/certbot/www:/var/www/certbot \
  certbot/certbot certonly --webroot -w /var/www/certbot \
  --email $CERTBOT_EMAIL -d $CERTBOT_DOMAIN --agree-tos --non-interactive

if [ $? -eq 0 ]; then
  docker compose exec nginx nginx -s reload
  echo "SSL certificate obtained/renewed successfully and Nginx reloaded."
else
  echo "Failed to obtain/renew SSL certificate."
fi