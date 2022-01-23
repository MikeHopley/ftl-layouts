function drawRooms() {
	let rooms = document.querySelectorAll('.drop-target')
	rooms.forEach((room) => {
		room.style.left = room.dataset.origin_x + 'px'
		room.style.top = room.dataset.origin_y + 'px'
		room.classList.add(room.dataset.shape)
	})
}

function concealSystems() {
	document.querySelectorAll('.with-block').forEach((block) => {
		block.hidden = false;
	})
}

function revealSystems() {
	document.querySelectorAll('.with-block').forEach((block) => {
		block.hidden = true;
	})
}

function toggleRooms() { 
	let rooms = document.querySelectorAll('.rooms')
	rooms.forEach(function(ship) {
		ship.hidden = !ship.hidden
	})
	let button = document.getElementById('toggleRooms')
	if (button.innerHTML == 'Show rooms') {
		button.innerHTML = 'Hide rooms'
	} else {
		button .innerHTML = 'Show rooms'
	}
}

function forceShowRooms() {
	let button = document.getElementById('toggleRooms')
	if (button.innerHTML == 'Show rooms') {
		toggleRooms()
	}

	document.getElementById('toggleRooms').disabled = true
}

function showDropTargets() {
	document.querySelectorAll('.drop-target').forEach((drop) => {
		drop.hidden = false
		drop.classList.remove('invalid')
	})
}

function togglePirate() { 
	let ships = document.querySelectorAll('.ship-item')
	ships.forEach(function(ship) {
		ship.hidden = !ship.hidden
	})
	let button = document.getElementById('togglePirate')
	if (button.innerHTML == 'Show pirate layouts') {
		button.innerHTML = 'Show regular layouts'
	} else {
		button .innerHTML = 'Show pirate layouts'
	}
}

function toggleTest() {
	let button = document.getElementById('toggleTest')
	if (button.innerHTML == 'Test yourself!') {
		button.innerHTML = 'Stop testing'
		beginTest()
	} else {
		button.innerHTML = 'Test yourself!'
		endTest()
	}
}

function beginTest() {
	forceShowRooms()
	showDropTargets()
	hideSystemsUI()
	concealSystems()
	showDraggableIcons()
}

function endTest() {
	showSystemsUI()
	hideDraggableIcons()
	revealSystems()
	
	document.getElementById('toggleRooms').disabled = false
}

function toggleSystem() {
	system = document.getElementById('system_' + this.dataset.system)
	if (system.hidden) {
		showSystem(system)
	} else {
		hideSystems(system)
	}
}

function showSystem(system) {
	hideSystems(system)
	system.hidden = false
}

function hideSystems(system) {
	let ship = system.dataset.systemship
	let shipSystems = document.querySelectorAll("[data-systemship='"+ship+"']")
	shipSystems.forEach((system) => {
		system.hidden = true
	})
}

function hideSystemsUI() {
	let systems = document.querySelectorAll('.system-levels')
	systems.forEach((system) => {
		system.hidden = true
	})

	let tray = document.querySelectorAll('.invisible-icon')
	tray.forEach((icon) => {
		icon.hidden = true
	})
}

function showSystemsUI() {
	let tray = document.querySelectorAll('.invisible-icon')
	tray.forEach((icon) => {
		icon.hidden = false
	})
}

function showDraggableIcons() {
	let draggable = document.querySelectorAll('.draggable-system')
	draggable.forEach((icon) => {
		icon.hidden = false
	})
}

function hideDraggableIcons() {
	let draggable = document.querySelectorAll('.draggable-system')
	draggable.forEach((icon) => {
		icon.hidden = true
	})
}

function hideSystem() {
	document.getElementById('system_' + this.dataset.system).hidden = true
}

function dragstart_handler(event) {
	event.dataTransfer.effectAllowed = 'link';
	event.dataTransfer.setData('dragged-room', this.dataset.room);
	event.dataTransfer.setData('dragged-icon', this.id);
}

function dragend_handler(event) {
	// this.hidden = true
}

function dragenter_handler() {
	let room = this.dataset.room
	document.getElementById('room_'+room).classList.remove('transparent')
}

function dragleave_handler() {
	let room = this.dataset.room
	document.getElementById('room_'+room).classList.add('transparent')
}

// Not using this, but must be set to allow dropping
function dragover_handler(event) {
	event.preventDefault()
}

function drop_handler(event) {
	event.preventDefault()
	
	var dragged = event.dataTransfer.getData('dragged-room');
	var dropped = this.dataset.room
	var icon = event.dataTransfer.getData('dragged-icon')

	console.log(document.getElementById(icon))
	document.getElementById(icon).style.display = 'none'

	var room = document.getElementById('room_' + dropped)
	room.classList.add('transparent')

	if (dragged == dropped) {
		document.getElementById('room_block_' + dropped).hidden = true
		room.classList.add('invalid')
		document.getElementById(icon).draggable = false
	}
}

(function () {
	document.getElementById('toggleRooms').addEventListener('click', toggleRooms)
	document.getElementById('toggleTest').addEventListener('click', toggleTest)
	
	let pirate = document.getElementById('togglePirate')
	if (pirate) {
		pirate.addEventListener('click', togglePirate)
	}

	const trays = document.querySelectorAll('.invisible-icon')
	trays.forEach((tray) => {
		tray.addEventListener('click', toggleSystem)
	})

	const closeButtons = document.querySelectorAll('.close-system')
	closeButtons.forEach((button) => {
		button.addEventListener('click', toggleSystem)
	})

	drawRooms()

	const draggable = document.querySelectorAll('.draggable-system')
	draggable.forEach((icon) => {
		icon.addEventListener('dragstart', dragstart_handler)
		icon.addEventListener('dragend', dragend_handler)
	})

	const droppable = document.querySelectorAll('.droppable-area')
	droppable.forEach((dropzone) => {
		dropzone.addEventListener('dragenter', dragenter_handler)
		dropzone.addEventListener('dragleave', dragleave_handler)
		dropzone.addEventListener('drop', drop_handler)
		dropzone.addEventListener('dragover', dragover_handler)
	})
})();