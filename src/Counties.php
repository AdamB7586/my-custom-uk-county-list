<?php
namespace UKCounties;

class Counties {
    /**
     * An array of the counties with ID defined for backwards compatibility and incase of any future changes so new addition don't change existing numbers
     * @var array An array of all of the UK counties
     */
    protected static $counties = array(
        // England
        1 => 'Bedfordshire',
        2 => 'Berkshire',
        3 => 'Bristol',
        4 => 'Buckinghamshire',
        5 => 'Cambridgeshire',
        6 => 'Cheshire',
        7 => 'City of London',
        8 => 'Cornwall',
        9 => 'Cumbria',
        10 => 'Derbyshire',
        11 => 'Devon',
        12 => 'Dorset',
        13 => 'Durham',
        14 => 'East Riding of Yorkshire',
        15 => 'East Sussex',
        16 => 'Essex',
        17 => 'Gloucestershire',
        18 => 'Greater London',
        19 => 'Greater Manchester',
        20 => 'Hampshire',
        21 => 'Herefordshire',
        22 => 'Hertfordshire',
        23 => 'Isle of Wight',
        24 => 'Kent',
        25 => 'Lancashire',
        26 => 'Leicestershire',
        27 => 'Lincolnshire',
        28 => 'Merseyside',
        29 => 'Norfolk',
        30 => 'North Yorkshire',
        31 => 'Northamptonshire',
        32 => 'Northumberland',
        33 => 'Nottinghamshire',
        34 => 'Oxfordshire',
        35 => 'Rutland',
        36 => 'Shropshire',
        37 => 'Somerset',
        38 => 'South Yorkshire',
        39 => 'Staffordshire',
        40 => 'Suffolk',
        41 => 'Surrey',
        42 => 'Tyne and Wear',
        43 => 'Warwickshire',
        44 => 'West Midlands',
        45 => 'West Sussex',
        46 => 'West Yorkshire',
        47 => 'Wiltshire',
        48 => 'Worcestershire',
        
        // Scotland
        50 => 'Aberdeenshire',
        55 => 'Angus',
        54 => 'Argyll',
        69 => 'Ayrshire',
        51 => 'Banffshire',
        75 => 'Berwickshire',
        59 => 'Bute',
        68 => 'Caithness',
        66 => 'Clackmannanshire',
        67 => 'Cromartyshire',
        63 => 'Dumfriesshire',
        58 => 'Dunbartonshire',
        74 => 'East Lothian',
        57 => 'City of Edinburgh',
        76 => 'Fife',
        49 => 'Inverness-shire',
        64 => 'Kincardineshire',
        78 => 'Kinross-shire',
        60 => 'Kirkcudbrightshire',
        65 => 'Lanarkshire',
        71 => 'Midlothian',
        67 => 'Moray',
        70 => 'Nairnshire',
        79 => 'Orkney',
        61 => 'Peeblesshire',
        52 => 'Perthshire',
        77 => 'Renfrewshire',
        53 => 'Ross-shire',
        72 => 'Roxburghshire',
        62 => 'Selkirkshire',
        80 => 'Shetland',
        57 => 'Stirlingshire',
        56 => 'Sutherland',
        73 => 'West Lothian',
        81 => 'Wigtownshire',
        
        // Wales        
        122 => 'Blaenau Gwent',
        123 => 'Bridgend',
        124 => 'Caerphilly',
        125 => 'Cardiff',
        86 => 'Carmarthenshire',
        126 => 'Ceredigion',
        127 => 'Conwy',
        87 => 'Denbighshire',
        88 => 'Flintshire',
        128 => 'Gwynedd',
        129 => 'Isle of Anglesey',
        130 => 'Merthyr Tydfil',
        91 => 'Monmouthshire',
        131 => 'Neath Port Talbot',
        132 => 'Newport',
        93 => 'Pembrokeshire',
        133 => 'Powys',
        134 => 'Rhondda Cynon Taf',
        135 => 'Swansea',
        136 => 'Torfaen',
        137 => 'Vale of Glamorgan',
        138 => 'Wrexham',
        
        // Northern Ireland
        139 => 'Antrim',
        140 => 'Armagh',
        141 => 'Down',
        142 => 'Fermanagh',
        143 => 'Londonderry',
        144 => 'Tyrone',
    );

    /**
     * Get the counties in their current order
     * @return array This will be the list of counties
     */
    public static function getCounties(){
        return self::$counties;
    }
    
    /**
     * Return the counties listed in alphabetical order 
     * @return array This will be the list of counties
     */
    public static function getCountiesByName(){
        asort(self::$counties);
        return self::$counties;
    }
    
    /**
     * Returns the total number of counties
     * @return int The number of counties
     */
    public static function getNumberOfCounties(){
        return count(self::$counties);
    }

    /**
     * Returns the id of a given county name
     * @param string $county This should be the county name you wish to find the id for
     * @return int Returns the id of the given county name
     */
    public static function getCountyID($county){
        $names = array_keys(self::$counties, $county);
        return $names[0];
    }
    
    /**
     * Returns the county name of a given county id
     * @param int $id This should be the id of the county you wish to know the name of
     * @return string Will return the county name of the id
     */
    public static function getCountyName($id){
        if(is_numeric($id)){
            return self::$counties[intval($id)];
        }
        return false;
    }
}
