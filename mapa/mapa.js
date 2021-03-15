(function(lib, img, cjs, ss, an) {

    var p; // shortcut to reference prototypes
    lib.ssMetadata = [];


    // symbols:



    (lib.mapa_1 = function() {
        this.initialize(img.mapa_1);
    }).prototype = p = new cjs.Bitmap();
    p.nominalBounds = new cjs.Rectangle(0, 0, 1920, 777); // helper functions:

    function mc_symbol_clone() {
        var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
        clone.gotoAndStop(this.currentFrame);
        clone.paused = this.paused;
        clone.framerate = this.framerate;
        return clone;
    }

    function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
        var prototype = cjs.extend(symbol, cjs.MovieClip);
        prototype.clone = mc_symbol_clone;
        prototype.nominalBounds = nominalBounds;
        prototype.frameBounds = frameBounds;
        return prototype;
    }


    (lib.ClipGroup_0 = function(mode, startPosition, loop) {
        this.initialize(mode, startPosition, loop, {});

        // Layer 2 (mask)
        var mask = new cjs.Shape();
        mask._off = true;
        mask.graphics.p("EhwfBSlMAAAilJMDg/AAAMAAAClJg");
        mask.setTransform(720, 528.5);

        // Layer 3
        this.shape = new cjs.Shape();
        this.shape.graphics.f("#606EB2").s().p("AjWEOIAAobIGtAAIAAIbg");
        this.shape.setTransform(311, 479);

        var maskedShapeInstanceList = [this.shape];

        for (var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
            maskedShapeInstanceList[shapedInstanceItr].mask = mask;
        }

        this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

    }).prototype = getMCSymbolPrototype(lib.ClipGroup_0, new cjs.Rectangle(289.5, 452, 43, 54), null);


    (lib.ClipGroup = function(mode, startPosition, loop) {
        this.initialize(mode, startPosition, loop, {});

        // Layer 2 (mask)
        var mask = new cjs.Shape();
        mask._off = true;
        mask.graphics.p("AhcBtQhIhzAAgwQAAhEAwgxQAwgwBEAAQBEAAAwAwQAxAxAABEQAAAwhJByQhGBwgWAAQgWAAhGhvgAhgiXQgoAoAAA5QAAApA7BhQA7BfASAAQATgBA6hfQA9hhgBgoQAAg5gngoQgpgpg5AAQg4AAgoApgAgvgFQgVgUAAgdQAAgcAVgVQATgUAcAAQAdAAATAUQAVAVAAAcQAAAdgVAUQgTASgdAAQgcAAgTgSgAgchUQgNANAAARQAAARANAMQAMAMAQAAQARAAAMgMQAMgMAAgRQAAgRgMgNQgMgMgRABQgQgBgMAMg");
        mask.setTransform(311, 479);

        // Layer 3
        this.instance = new lib.ClipGroup_0();
        this.instance.parent = this;
        this.instance.setTransform(720, 528.5, 1, 1, 0, 0, 0, 720, 528.5);

        var maskedShapeInstanceList = [this.instance];

        for (var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
            maskedShapeInstanceList[shapedInstanceItr].mask = mask;
        }

        this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

    }).prototype = getMCSymbolPrototype(lib.ClipGroup, new cjs.Rectangle(294.5, 457, 33, 44), null);


    (lib.eeuu = function(mode, startPosition, loop) {
        this.initialize(mode, startPosition, loop, {});

        // Layer 1
        this.instance = new lib.ClipGroup();
        this.instance.parent = this;
        this.instance.setTransform(425.5, 71.5, 1, 1, 0, 0, 0, 720, 528.5);

        this.timeline.addTween(cjs.Tween.get(this.instance).to({ y: 51.5 }, 5).to({ y: 71.5 }, 4).wait(1));

    }).prototype = p = new cjs.MovieClip();
    p.nominalBounds = new cjs.Rectangle(-294.5, -457, 1440, 1057);


    (lib.Symbol1 = function(mode, startPosition, loop) {
        this.initialize(mode, startPosition, loop, {});

        // Layer 1
        this.instance = new lib.ClipGroup();
        this.instance.parent = this;
        this.instance.setTransform(425.5, 71.5, 1, 1, 0, 0, 0, 720, 528.5);

        this.timeline.addTween(cjs.Tween.get(this.instance).to({ y: 61.5 }, 5).to({ y: 71.5 }, 4).wait(1));

    }).prototype = p = new cjs.MovieClip();
    p.nominalBounds = new cjs.Rectangle(-294.5, -457, 1440, 1057);


    (lib.btnlocation = function(mode, startPosition, loop) {
        this.initialize(mode, startPosition, loop, {});

        // Layer 1
        this.instance = new lib.eeuu("synched", 0);
        this.instance.parent = this;
        this.instance.setTransform(425.5, 71.5, 1, 1, 0, 0, 0, 425.5, 71.5);

        this.instance_1 = new lib.Symbol1();
        this.instance_1.parent = this;
        this.instance_1.setTransform(425.5, 71.5, 1, 1, 0, 0, 0, 425.5, 71.5);

        this.shape = new cjs.Shape();
        this.shape.graphics.f("#0066CC").s().p("Ah0CbQgwhAAAhbQAAhaAwhAQAxhBBDAAQBEAAAxBBQAwBAAABaQAABbgwBAQgxBBhEAAQhDAAgxhBg");
        this.shape.setTransform(16.5, 22);

        this.timeline.addTween(cjs.Tween.get({}).to({ state: [{ t: this.instance }] }).to({ state: [{ t: this.instance_1 }] }, 1).to({ state: [{ t: this.instance }] }, 1).to({ state: [{ t: this.shape }, { t: this.instance }] }, 1).wait(1));

    }).prototype = p = new cjs.MovieClip();
    p.nominalBounds = new cjs.Rectangle(0, 0, 33, 44);


    // stage content:
    (lib.mapa = function(mode, startPosition, loop) {
        this.initialize(mode, startPosition, loop, {});

        // Oceania
        this.instance = new lib.btnlocation();
        this.instance.parent = this;
        this.instance.setTransform(2187.4, 659.9, 1, 1, 0, 0, 0, 425.5, 71.5);
        new cjs.ButtonHelper(this.instance, 0, 1, 2, false, new lib.btnlocation(), 3);

        this.timeline.addTween(cjs.Tween.get(this.instance).wait(130));

        // Asia
        this.instance_1 = new lib.btnlocation();
        this.instance_1.parent = this;
        this.instance_1.setTransform(2024.4, 202, 1, 1, 0, 0, 0, 425.5, 71.5);
        new cjs.ButtonHelper(this.instance_1, 0, 1, 2, false, new lib.btnlocation(), 3);

        this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(130));

        // España
        this.instance_2 = new lib.btnlocation();
        this.instance_2.parent = this;
        this.instance_2.setTransform(1350.4, 193.9, 1, 1, 0, 0, 0, 425.5, 71.5);
        new cjs.ButtonHelper(this.instance_2, 0, 1, 2, false, new lib.btnlocation(), 3);

        this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(130));

        // Sudafrica
        this.instance_3 = new lib.btnlocation();
        this.instance_3.parent = this;
        this.instance_3.setTransform(1295.5, 423.9, 1, 1, 0, 0, 0, 425.5, 71.5);
        new cjs.ButtonHelper(this.instance_3, 0, 1, 2, false, new lib.btnlocation(), 3);

        this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(130));

        // Argentina
        this.instance_4 = new lib.btnlocation();
        this.instance_4.parent = this;
        this.instance_4.setTransform(925.5, 703.9, 1, 1, 0, 0, 0, 425.5, 71.5);
        new cjs.ButtonHelper(this.instance_4, 0, 1, 2, false, new lib.btnlocation(), 3);

        this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(130));

        // EEUU
        this.instance_5 = new lib.btnlocation();
        this.instance_5.parent = this;
        this.instance_5.setTransform(845.5, 328.9, 1, 1, 0, 0, 0, 425.5, 71.5);
        new cjs.ButtonHelper(this.instance_5, 0, 1, 2, false, new lib.btnlocation(), 3);

        this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(130));

        // Mapa
        this.instance_6 = new lib.mapa_1();
        this.instance_6.parent = this;
        this.instance_6.setTransform(0, -4, 1, 1.03);

        this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(130));

    }).prototype = p = new cjs.MovieClip();
    p.nominalBounds = new cjs.Rectangle(960, 65.4, 2907.4, 1567);
    // library properties:
    lib.properties = {
        width: 1920,
        height: 800,
        fps: 24,
        color: "#FFFFFF",
        opacity: 1.00,
        manifest: [
            { src: "/wp-content/uploads/mapa_1.jpg", id: "mapa_1" }
        ],
        preloads: []
    };




})(lib = lib || {}, images = images || {}, createjs = createjs || {}, ss = ss || {}, AdobeAn = AdobeAn || {});
var lib, images, createjs, ss, AdobeAn;