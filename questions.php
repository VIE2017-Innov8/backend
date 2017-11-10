<?php

header("Content-type: application/json");

echo <<<EOT
[
    {
        "name": "Huis",
        "questions": [
            {
                "title": "In welke plaats moet het huis staan?",
                "type": "open"
            },
            {
                "title": "Hoe veel mag het huis maximaal kosten?",
                "type": "dropdown",
                "values": [100000, 200000, 300000, 400000, 500000, 1000000]
            }
        ]
    },
    {
        "name": "Voorzieningen",
        "questions": [
            {
                "title": "Moet er een school in de buurt zijn?",
                "type": "boolean"
            },
            {
                "title": "Moet er een ziekenhuis in de buurt zijn?",
                "type": "boolean"
            }
        ]
    }
]
EOT;
