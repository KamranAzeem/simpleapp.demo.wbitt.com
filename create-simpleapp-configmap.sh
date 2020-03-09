#!/bin/bash

echo "First, deleting the old configmap: configmap-simpleapp-conf"
kubectl delete configmap configmap-simpleapp-conf || true

echo "Creating the new configmap: configmap-simpleapp-conf"
kubectl create configmap configmap-simpleapp-conf --from-file=simpleapp.conf
