#!/bin/bash
echo "Starting Building process of scss code"

echo "[Main Template]"
echo "- style.css"
sass ./scss/style/style.scss ./style.css


echo "- print.css"
sass ./scss/print/print.scss ./content/styles/print.css

echo "- style-customizer.css"
sass ./scss/style-customizer/style-customizer.scss ./content/styles/style-customizer.css

echo "- style-editor.css"
sass ./scss/style-editor/style-editor.scss ./content/styles/style-editor.css


echo "[Components]"
sass ./scss/components/test/test.scss ./content/styles/test.css