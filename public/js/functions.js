const internals = document.querySelectorAll('.image_rooms')
const externals = document.querySelectorAll('.image_hull')
const slots = document.querySelectorAll('.image_slots, .room-number')
const crew = document.querySelectorAll('.js_crew')
const hull = document.querySelectorAll('.js_hull')
const extras = document.querySelectorAll('.js_extras')
const systems = document.querySelectorAll('.js_system-levels')
const tray = document.querySelectorAll('.invisible-icon')
const draggable = document.querySelectorAll('.draggable-system')

const roomToggle = document.getElementById('toggleRooms')
const slotToggle = document.getElementById('toggleSlots')
const testToggle = document.getElementById('toggleTest')
const crewToggle = document.getElementById('toggleCrew')
const extrasToggle = document.getElementById('toggleExtras')
const hullToggle = document.getElementById('toggleHull')

const testRooms = document.querySelectorAll('.js_system-test')
const systemLinks = document.querySelectorAll('.js_system-links')
const optional = document.querySelectorAll('.js_optional-overlay')
const allRooms = document.querySelectorAll('.js_system-test, .js_system-links, .js_room-numbers, .js_optional-overlay')

const slotsHideText = 'Hide weapon slots<br>and room numbers'
const slotsShowText = 'Show weapon slots<br>and room numbers'

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
function toggleExtras() {
	extrasHidden() ? showExtras() : hideExtras();
}
function toggleHull() {
	hullHidden() ? showHull() : hideHull();
}

function showCrew() {
	hideHull()
	hideSlots()
	hideExtras()
	hideSystemLinks()
	roomToggle.disabled = true
	slotToggle.disabled = true
	hideAllSystems()
	crew.forEach((card) => { card.hidden = false })
	if (crewToggle) {
		crewToggle.innerHTML = 'Hide crew'
	}
}
function showExtras() {
	hideHull()
	hideCrew()
	hideSlots()
	hideSystemLinks()
	roomToggle.disabled = true
	slotToggle.disabled = true
	hideAllSystems()
	extras.forEach((card) => { card.hidden = false })
	extrasToggle.innerHTML = 'Hide extra info'
}
function showHull() {
	hideCrew()
	hideSlots()
	hideExtras()
	hideSystemLinks()
	roomToggle.disabled = true
	slotToggle.disabled = true
	hideAllSystems()
	hull.forEach((card) => { card.hidden = false })
	hullToggle.innerHTML = 'Hide hull'
}

function hideCrew() {
	showSystemLinks()
	roomToggle.disabled = false
	slotToggle.disabled = false
	crew.forEach((card) => { card.hidden = true })
	if (crewToggle) {
		crewToggle.innerHTML = 'Show crew'
	}
}
function hideExtras() {
	showSystemLinks()
	roomToggle.disabled = false
	slotToggle.disabled = false
	extras.forEach((card) => { card.hidden = true })
	extrasToggle.innerHTML = 'Show extra info'
}
function hideHull() {
	showSystemLinks()
	roomToggle.disabled = false
	slotToggle.disabled = false
	hull.forEach(function(card) { card.hidden = true })
	hullToggle.innerHTML = 'Show hull'
}

function crewHidden() {
	if (!crewToggle) {
		return true
	}
	return crewToggle.innerHTML == 'Show crew'
}
function extrasHidden() {
	return extrasToggle.innerHTML == 'Show extra info'
}
function hullHidden() {
	return hullToggle.innerHTML == 'Show hull'
}

function toggleSlots() {
	slotsHidden() ? showSlots() : hideSlots()
}

function showSlots() {	
	slotToggle.innerHTML = slotsHideText
	slots.forEach(function(ship) { ship.hidden = false })
	
	showRooms()
	internals.forEach(function(ship) { ship.hidden = true })
}

function hideSlots() {
	slotToggle.innerHTML = slotsShowText
	slots.forEach(function(ship) { ship.hidden = true })

	internals.forEach(function(ship) { ship.hidden = false })
}

function slotsHidden() {
	return slotToggle.innerHTML == slotsShowText
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
	hideExtras()
	slotToggle.disabled = true
	hullToggle.disabled = true
	extrasToggle.disabled = true
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
	extrasToggle.disabled = false
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
	if (!crewHidden()) {
		hideCrew()
	}
	if (!hullHidden()) {
		hideHull()
	}
	if (!extrasHidden()) {
		hideExtras()
	}
	hideShipSystemLinks(system.dataset.systemship)
	hideSystems(system.dataset.systemship)
	system.hidden = false
	hideSlots()
	slotToggle.disabled = true
}

function hideSystems(ship) {
	let shipSystems = document.querySelectorAll("[data-systemship='"+ship+"']")
	shipSystems.forEach((system) => { system.hidden = true })
	slotToggle.disabled = false
}

function hideAllSystems() {
	systems.forEach((system) => { system.hidden = true })
}

function hideSystemLinks() {
	systemLinks.forEach((link) => { link.hidden = true})
	optional.forEach((overlay) => { overlay.hidden = true})
}

function hideShipSystemLinks(ship) {
	systemLinks.forEach((link) => { 
		if (link.dataset.ship == ship) {
			link.hidden = true
		}
	})
	optional.forEach((overlay) => { 
		if (overlay.dataset.ship == ship) {
			overlay.hidden = true
		}
	})
}

function showShipSystemLinks(ship) {
	systemLinks.forEach((link) => { 
		if (link.dataset.ship == ship) {
			link.hidden = false
		}
	})
	optional.forEach((overlay) => { 
		if (overlay.dataset.ship == ship) {
			overlay.hidden = false
		}
	})
}

function showSystemLinks() {
	systemLinks.forEach((system) => { system.hidden = false})
	optional.forEach((overlay) => { overlay.hidden = false})
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
	var target = document.getElementById('room_block_' + this.dataset.room)

	if (target.hidden == true) {		
		this.hidden = true
	}
}

function dragenter_handler(event) {
	let room = this.dataset.room
	document.getElementById('room_' + room).classList.remove('transparent')

	event.preventDefault()
	return false
}

function dragleave_handler() {
	let room = this.dataset.room
	document.getElementById('room_' + room).classList.add('transparent')
}

// Not using this, but must be set to allow dropping
function dragover_handler(event) {
	event.preventDefault()
	return false
}

function drop_handler(event) {
	event.stopPropagation()
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

	return false
}

(function () {
	roomToggle.addEventListener('click', toggleRooms)
	testToggle.addEventListener('click', toggleTest)
	slotToggle.addEventListener('click', toggleSlots)
	hullToggle.addEventListener('click', toggleHull)
	extrasToggle.addEventListener('click', toggleExtras)
	
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