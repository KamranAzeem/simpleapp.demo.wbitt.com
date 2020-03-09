#!/bin/bash
# This script reads simpleapp.env and creates equivalent kubernetes secrets.
# It needs to be capable for creating k8s secrets by reading ENV variables as well,
#   as, that is the case with CI systems.
if [ ! -f ./simpleapp.env ]; then
  echo "Could not find ENV variables file for simpleapp. The file is missing: ./simpleapp.env"
  exit 1
fi

echo "First, deleting the old secret: simpleapp-credentials"
kubectl delete secret simpleapp-credentials || true

source ./simpleapp.env

echo "Found simpleapp.env file, creating kubernetes secret: simpleapp-credentials"

echo "MYSQL_HOST=${MYSQL_HOST}"
echo "MYSQL_DATABASE=${MYSQL_DATABASE}"
echo "MYSQL_USER=${MYSQL_USER}"
echo "MYSQL_PASSWORD=${MYSQL_PASSWORD}"





kubectl create secret generic simpleapp-credentials \
  --from-literal=MYSQL_HOST=${MYSQL_HOST} \
  --from-literal=MYSQL_DATABASE=${MYSQL_DATABASE} \
  --from-literal=MYSQL_USER=${MYSQL_USER} \
  --from-literal=MYSQL_PASSWORD=${MYSQL_PASSWORD}

