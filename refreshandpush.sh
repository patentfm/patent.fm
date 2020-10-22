# Launch script in background
./start.sh &
# Get its PID
PID=$!
# Wait for 2 seconds
sleep 5
# Kill it
kill $PID
git add .
git commit -m 'automat'
git push