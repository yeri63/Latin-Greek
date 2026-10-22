<?php
    session_start();
    header("Content-type: text/xml");

    $delay = 60;
    header("Refresh:$delay");

    $urlPath = "http://192.168.3.250/cisco/latin.php";

    # Recall prior variable state
    $id = $_SESSION['id'] ?? "";            # App name.

    # Prevent data corruption from prior application.
    if ($id == "latin")	{
        $i = $_SESSION['i'];                # Index pointing to item.
        $update = $_SESSION['update'];      # Time from prior page update.
	
        } else {
        $i = 0;
        $update = 0; }

    $latin = array(
        "re-",
        "Prefix",
        "again or back",
        "reread, rewrite, return",

        "dis-",
        "Prefix",
        "not or opposite of",
        "dislike, distrust",

        "in-",
        "Prefix",
        "not",
        "inactive, inexpensive",

        "non-",
        "Prefix",
        "not",
        "nonfat, nonsense",

        "pre-",
        "Prefix",
        "before",
        "preplan, pretest",

        "bi-",
        "Prefix",
        "two",
        "bicycle, binocular",

        "tri-",
        "Prefix",
        "three",
        "tricycle, triangle",

        "quad-",
        "Prefix",
        "four",
        "quadrilateral, quadrant",

        "oct-",
        "Prefix",
        "eight",
        "octagon, octopus",

        "-ment",
        "Prefix",
        "act or process",
        "enjoyment, replacement",

        "-er, -or",
        "Prefix",
        "one who or that which",
        "baker, conductor, survivor",

        "semi-",
        "Suffix",
        "half",
        "semicircle, semicolon",

        "super-",
        "Prefix",
        "above, on top of, beyond",
        "superfine, supersonic",

        "multi-",
        "Prefix",
        "many or much",
        "multicolor, multipurpose",

        "poly-",
        "Prefix",
        "many or much",
        "polygon, pylygraph",

        "tele-",
        "Prefix",
        "distant or far",
        "television, telephone",

        "mis-",
        "Prefix",
        "bad or wrong",
        "misread, misspell",

        "inter-",
        "Prefix",
        "between",
        "intercept, interview",

        "sub-",
        "Prefix",
        "under, beneath, below",
        "subway, subsoil",

        "deca-, deci",
        "Prefix",
        "ten",
        "decade, decimal",

        "kilo-",
        "Prefix",
        "1,000",
        "kilogram, kilomile",

        "milli-, mille-",
        "Prefix",
        "1,000",
        "millennium, millimeter",

        "centi-",
        "Prefix",
        "100",
        "centimeter, centipede",

        "-able, ible",
        "Prefix",
        "can be done",
        "enjoyable, likeable",

        "-ian, -an",
        "Suffix",
        "one with skill, a group",
        "electrician, magician",

        "-ist",
        "Suffix",
        "one who ...",
        "artist, tourist",

        "-logy, -ology",
        "Suffix",
        "science or study of",
        "biology, chronology",

        "-ism",
        "Suffix",
        "act, belief, or practice",
        "patriotism, idealism",

        "-ence, -ance",
        "Suffix",
        "act or condition of",
        "persistence, importance",

        "-ess",
        "Suffix",
        "feminine",
        "actress, lioness",

        "max",
        "Suffix",
        "great",
        "maximum, maximize",

        "meter, metr",
        "Root",
        "measure",
        "diameter, perimeter",

        "photo",
        "Root",
        "light",
        "photograph, photocopy",

        "port",
        "Root",
        "to carry",
        "portable, transport",

        "phobia, phobic, phobe",
        "Root",
        "fear or hatred",
        "aquaphobia, claustrophobic",

        "rupt",
        "Root",
        "break or burst",
        "bankrupt, rupture",

        "scrib, script",
        "Root",
        "to write",
        "describe, manuscript",

        "gram, graph",
        "Root",
        "written or drawn",
        "autograph, paragraph",

        "dict",
        "Root",
        "to say or tell",
        "diction, dictator",

        "ject",
        "Root",
        "to throw",
        "inject, objection",

        "spect, spec",
        "Root",
        "to see, watch or observe",
        "prospect, respect",

        "en-, em-",
        "Root",
        "to cause, to put or go into",
        "encounter, enable",

        "de-",
        "Prefix",
        "reduce down, away from",
        "defeat, decrease",

        "trans-",
        "Prefix",
        "across, change, through",
        "transform, transport",

        "anti-",
        "Prefix",
        "opposite, against",
        "antibiotic, antifreeze",

        "di, dia-",
        "Prefix",
        "two, through, across",
        "dialogue, diagonal",

        "ex-",
        "Prefix",
        "out of, away, from",
        "extract, extend, exhale",

        "auto-",
        "Prefix",
        "self",
        "autograph, automatic",

        "in-, il-, im-, ir-",
        "Prefix",
        "not",
        "inability, impatient",

        "in-, il-, im-, ir-",
        "Prefix",
        "in, on, toward",
        "illustrate, improve",

        "bio-",
        "Prefix",
        "life",
        "biography, biological",

        "mini-",
        "Prefix",
        "small",
        "miniature, minimum",

        "micro-",
        "Prefix",
        "small, minute",
        "microbiology, microscope",

        "uni-",
        "Prefix",
        "one, single",
        "unicorn, unicycle",

        "-ity",
        "Prefix",
        "state of, quality of",
        "prosperity, equality",

        "-al, ial",
        "Suffix",
        "related to, characterized by",
        "colonial, betrayal",

        "-ent, -ant",
        "Suffix",
        "an action, condition",
        "student, contestant",

        "-ent, -ant",
        "Suffix",
        "causing a specific action",
        "obedient, absorbent",

        "aqua",
        "Suffix",
        "water",
        "aquarium, aquamarine",

        "act",
        "Root",
        "put in motion",
        "action, react, transact",

        "mit",
        "Root",
        "to send",
        "emit, transmit",

        "anni, annu, enni",
        "Root",
        "year",
        "anniversary, millennium",

        "arch",
        "Root",
        "chief, ruler",
        "archenemy, matriarch",

        "duct, duc",
        "Root",
        "lead",
        "induce, conduct",

        "geo",
        "Root",
        "earth, ground, soil",
        "geography, geology",

        "man",
        "Root",
        "hand",
        "manicure, manually",

        "num, onym",
        "Root",
        "name, word",
        "antonym, synonym",

        "phon",
        "Root",
        "voice, sound",
        "telephone, symphony",

        "therm",
        "Root",
        "heat",
        "thermometer, thermostat",

        "tox",
        "Root",
        "poison",
        "toxic, toxicology",

        "scope",
        "Root",
        "to watch, see",
		"horoscope, telescope");

	$count = 72;

    # Get SoftKey selection.
    $cmd = $_GET['key'] ?? 0;                   # User command.

    # Check page refresh delay.
    if (time() - $update < $delay) 

        # Update index based on user input.
        switch($cmd) {
        case 1 : # prev
            $i = ($i - 4 + $count) % $count;    # root
            break;

        case 2 : # next
            $i = ($i + 4) % $count;             # root
			break; 
		} 
	else
        # Advance to next item after page refresh delay.
        $i = ($i + 4) % $count;                 # root

    $j = $i + 1;                                # type
    $k = $i + 2;                                # meaning
    $l = $i + 3;                                # example

    echo "<CiscoIPPhoneText>\n";
    echo "<Title>Prefix-Suffix-Roots</Title>\n";
	echo "  <Text>";

    echo "$latin[$j]: $latin[$i]\n";
    echo "Meaning: $latin[$k]\n";
    echo "Example: $latin[$l]";
    echo "  </Text>\n";

    echo "  <SoftKeyItem>\n";
    echo "      <Name>Prev</Name>\n";
    echo "      <URL>$urlPath?key=1</URL>\n";
    echo "      <Position>1</Position>\n";
    echo "  </SoftKeyItem>\n";
            
    echo "  <SoftKeyItem>\n";
    echo "      <Name>Next</Name>\n";
    echo "      <URL>$urlPath?key=2</URL>\n";
    echo "      <Position>2</Position>\n";
    echo "  </SoftKeyItem>\n";
            
    echo "  <SoftKeyItem>\n";
    echo "      <Name>Exit</Name>\n";
    echo "      <URL>SoftKey:Exit</URL>\n";
    echo "      <Position>4</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <Prompt>Select an option.</Prompt>\n";
    echo "</CiscoIPPhoneText>";

    # Save current variable state.
    $_SESSION['id'] = "latin";
    $_SESSION['i'] = $i;
    $_SESSION['update'] = time();
?>
