const internals = document.querySelectorAll('.image_rooms')
const externals = document.querySelectorAll('.image_hull')
const slots = document.querySelectorAll('.image_slots')
const crew = document.querySelectorAll('.js_crew')
const hull = document.querySelectorAll('.js_hull')
const systems = document.querySelectorAll('.js_system-levels')
const tray = document.querySelectorAll('.invisible-icon')
const draggable = document.querySelectorAll('.draggable-system')

const roomToggle = document.getElementById('toggleRooms')
const slotToggle = document.getElementById('toggleSlots')
const testToggle = document.getElementById('toggleTest')
const crewToggle = document.getElementById('toggleCrew')
const hullToggle = document.getElementById('toggleHull')

const testRooms = document.querySelectorAll('.js_system-test')
const systemLinks = document.querySelectorAll('.js_system-links')
const allRooms = document.querySelectorAll('.js_system-test, .js_system-links')

function drawRooms() {
	allRooms.forEach((room) => {
		room.style.left = room.dataset.origin_x + 'px'
		room.style.top = room.dataset.origin_y + 'px'
		room.classList.add(room.dataset.shape)
	})
}

function concealSystems() {
	document.querySelectorAll('.with-block').forEach((block) => {
		block.hidden = false
	})
}

function revealSystems() {
	document.querySelectorAll('.with-block').forEach((block) => {
		block.hidden = true
	})
}

function toggleCrew() {
	crewHidden() ? showCrew() : hideCrew();
}
function toggleHull() {
	hullHidden() ? showHull() : hideHull();
}

function showCrew() {
	hideHull()
	hideSystemLinks()
	roomToggle.disabled = true
	slotToggle.disabled = true
	hideAllSystems()
	crew.forEach(function(card) { card.hidden = false })
	if (crewToggle) {
		crewToggle.innerHTML = 'Hide crew'
	}
}
function showHull() {
	hideSystemLinks()
	roomToggle.disabled = true
	slotToggle.disabled = true
	hideAllSystems()
	hull.forEach(function(card) { card.hidden = false })
	hullToggle.innerHTML = 'Hide hull'
}

function hideCrew() {
	showSystemLinks()
	roomToggle.disabled = false
	slotToggle.disabled = false
	crew.forEach(function(card) { card.hidden = true })
	if (crewToggle) {
		crewToggle.innerHTML = 'Show crew'
	}
}
function hideHull() {
	showSystemLinks()
	roomToggle.disabled = false
	slotToggle.disabled = false
	hull.forEach(function(card) { card.hidden = true })
	hullToggle.innerHTML = 'Show hull'
}

function crewHidden() {
	return crewToggle.innerHTML == 'Show crew'
}
function hullHidden() {
	return hullToggle.innerHTML == 'Show hull'
}

function toggleSlots() {
	slotsHidden() ? showSlots() : hideSlots()
}

function showSlots() {	
	slotToggle.innerHTML = 'Hide weapon slots'
	slots.forEach(function(ship) { ship.hidden = false })
	
	showRooms()
	internals.forEach(function(ship) { ship.hidden = true })
}

function hideSlots() {
	slotToggle.innerHTML = 'Show weapon slots'
	slots.forEach(function(ship) { ship.hidden = true })

	internals.forEach(function(ship) { ship.hidden = false })
}

function slotsHidden() {
	return slotToggle.innerHTML == 'Show weapon slots'
}
function roomsHidden() {
	return roomToggle.innerHTML == 'Show rooms'
}

function toggleRooms() { 
	roomsHidden() ? showRooms() : hideRooms()
}

function showRooms() {
	roomToggle.innerHTML = 'Hide rooms'
	internals.forEach(function(ship) { ship.hidden = false })
	externals.forEach(function(ship) { ship.hidden = true })
}

function hideRooms() {
	hideSlots()
	roomToggle.innerHTML = 'Show rooms'
	internals.forEach(function(ship) { ship.hidden = true })
	externals.forEach(function(ship) { ship.hidden = false })
}

function forceShowRooms() {
	if (roomToggle.innerHTML == 'Show rooms') { toggleRooms() }
	roomToggle.disabled = true
}

function showDropTargets() {
	testRooms.forEach((drop) => {
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
	if (testToggle.innerHTML == 'Test yourself!') {
		testToggle.innerHTML = 'Stop testing'
		beginTest()
	} else {
		testToggle.innerHTML = 'Test yourself!'
		endTest()
	}
}

function beginTest() {
	hideSlots()
	hideCrew()
	hideHull()
	slotToggle.disabled = true
	hullToggle.disabled = true;
	if (crewToggle) {
		crewToggle.disabled = true
	}
	forceShowRooms()
	showDropTargets()
	hideSystemsUI()
	concealSystems()
	showDraggableIcons()
	hideSystemLinks()
}

function endTest() {
	slotToggle.disabled = false
	hullToggle.disabled = false
	if (crewToggle) {
		crewToggle.disabled = false
	}
	showSystemsUI()
	hideDraggableIcons()
	revealSystems()	
	roomToggle.disabled = false
	showSystemLinks()
}

function toggleSystem() {
	let system = document.getElementById('system_' + this.dataset.system)
	if (system.hidden) {
		showSystem(system)
	} else {
		hideSystems(system.dataset.systemship)
		showShipSystemLinks(system.dataset.systemship)
	}
}

function showSystem(system) {
	hideCrew()
	hideHull()
	hideShipSystemLinks(system.dataset.systemship)
	hideSystems(system.dataset.systemship)
	system.hidden = false
}

function hideSystems(ship) {
	let shipSystems = document.querySelectorAll("[data-systemship='"+ship+"']")
	shipSystems.forEach((system) => { system.hidden = true })
}

function hideAllSystems() {
	systems.forEach((system) => { system.hidden = true })
}

function hideSystemLinks() {
	systemLinks.forEach((system) => { system.hidden = true})
}

function hideShipSystemLinks(ship) {
	systemLinks.forEach((link) => { 
		if (link.dataset.ship == ship) {
			link.hidden = true
		}
	})
}

function showShipSystemLinks(ship) {
	systemLinks.forEach((link) => { 
		if (link.dataset.ship == ship) {
			link.hidden = false
		}
	})
}

function showSystemLinks() {
	systemLinks.forEach((system) => { system.hidden = false})
}

function hideSystemsUI() {
	systems.forEach((system) => {	system.hidden = true })
	tray.forEach((icon) => { icon.hidden = true })
}

function showSystemsUI() {
	tray.forEach((icon) => { icon.hidden = false })
}

function showDraggableIcons() {
	draggable.forEach((icon) => {	icon.hidden = false })
}

function hideDraggableIcons() {
	draggable.forEach((icon) => { icon.hidden = true })
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
	document.getElementById('room_' + room).classList.remove('transparent')
}

function dragleave_handler() {
	let room = this.dataset.room
	document.getElementById('room_' + room).classList.add('transparent')
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
	roomToggle.addEventListener('click', toggleRooms)
	testToggle.addEventListener('click', toggleTest)
	slotToggle.addEventListener('click', toggleSlots)
	hullToggle.addEventListener('click', toggleHull)
	
	if (crewToggle) {
		crewToggle.addEventListener('click', toggleCrew)
	}

	let pirate = document.getElementById('togglePirate')
	if (pirate) {
		pirate.addEventListener('click', togglePirate)
	}

	
	tray.forEach((icon) => {
		icon.addEventListener('click', toggleSystem)
	})

	systemLinks.forEach((link) => {
		link.addEventListener('click', toggleSystem)
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