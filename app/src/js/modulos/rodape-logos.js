//modulo de logos-patrocinio
let widget = document.querySelectorAll('div.logo-container.rodape-logos-inner');

if(widget.length>0){
	(function logosPatrocinioApoio(){
		let logo;
		
		function closestByNode(el, clazz) {
			while (el.nodeName != clazz.toUpperCase()) {
				el = el.parentNode;
				if (!el) {
					return null;
				}
			}
			return el;
		}
		if(widget){
			let el = closestByNode(widget[0],'section');
			el.id = 'rodape-logos';
		}
	})();
}