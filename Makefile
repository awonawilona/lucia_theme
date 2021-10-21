# Author: Pablo Rueda
# Theme: Lucia Theme
# Owner: www.threepress.es

stylus:
	./node_modules/stylus/bin/stylus -m  --include node_modules -u axis -u autoprefixer-stylus -u jeet -u rupture assets/stylus/*.styl -o assets/css -w

coffee:
	./node_modules/coffeescript/bin/coffee -o assets/js/ -wc assets/coffee/

install:
	echo "installing NPM packages..."
	npm install
