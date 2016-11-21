watch:
	./node_modules/stylus/bin/stylus -m  --include node_modules -u axis -u autoprefixer-stylus -u jeet -u rupture library/stylus/*.styl -o library/css -w

install:
	echo "installing NPM packages..."
	npm install
