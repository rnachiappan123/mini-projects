#!/bin/bash

URL=($(youtube-dl -g $1))

ffmpeg -ss $2 -to $3 -i ${URL[0]} -ss $2 -to $3 -i ${URL[1]} -map 0:v -map 1:a -c copy downloads/"$4"
