const bs = require('browser-sync');

module.exports = function bs_php() {
	bs.init({
		browser: ['chrome'],
		watch: true,
		proxy: 'http://mesite:97/',
		logLevel: 'info',
		logPrefix: 'BS-PHP:',
		logConnections: true,
		logFileChanges: true,
		host:'mesite',
		open:'external'
	})
}