#!/bin/bash
echo "Starting Building process of scss code"

sass ./scss/style.scss ./style.css

sh ./remove.sh