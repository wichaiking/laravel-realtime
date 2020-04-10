# Install Laravel
# Config Pusher
    - go to pusher.com create account
    - create app
    - config .env pusher
    - config BROADCAST_DRIVER to pusher
    - install package "composer require pusher/pusher-php-server"
    - edit config/app.php uncomment BroadcastServerProvider

# Install Laravel Echo
    - npm install --save-dev laravel-echo pusher-js
    - edit resources/js/bootstrap.js uncomment laravel-echo section
    - npm run dev

# Event
    - create event
    - add implements ShouldBroadcast
    - add channel name on broadcastOn()

# Listener
    - create listener

# EventServiceProvider
    - register event, listener