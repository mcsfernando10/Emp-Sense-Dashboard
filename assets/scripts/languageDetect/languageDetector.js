// Some variables for later
var dictionary, set_lang;

// Object literal behaving as multi-dictionary
dictionary = {
    "english": {
        "menu_dashboard": "Dashboard",
        "menu_visualCharts": "Visual Charts",
        "menu_analytical" : "Analytical Designer",
        "menu_predictive" : "Predictive Analytics",
        "menu_extra" : "Extra",
        "menu_lockScreen" : "Lock Screen",
        "menu_faq" : "FAQ",
        "menu_about_us" : "About Us",
        "menu_contact_us" : "Contact Us",
        
        //Index Page
        "home" : "Home",
        "semiHead" : "statistics and more",
        "viewMore" : "View More",
        "viewMoreDept" : "View More | Department",
        "viewMoreAgeRange" : "View More | Age Range",
        "viewMoreFactors" : "View More | Factors",
        
        //Analytica Designer Page
        //Predictive Analytic Page
        //Lock Screen Page
        //About Us Page
        //Contact Us Page
        //FAQ Page
        //Login Page
    },
    "sinhala": {
        "menu_dashboard": "උපකරණ පුවරුව",
        "menu_visualCharts": " ප්‍රස්ථාර",
        "menu_analytical" : "විශ්ලේෂණාත්මක නිර්මාණ",
        "menu_predictive" : "අනාවැකි විශ්ලේෂණ",
        "menu_extra" : "අමතර",
        "menu_lockScreen" : "අගුලු තිරය",
        "menu_faq" : "නිති අසන පැණ",
        "menu_about_us" : "අපි ගැන",
        "menu_contact_us" : "අප අමතන්න",
        
        //Index Page
        "home" : "මුල් පිටුව",
        "semiHead" : "සංඛ්‍යා ලේඛන සහ වෙනත්" ,
        "viewMore" : "වැඩි විස්තර",
        "viewMoreDept" : "තවත් බලන්න | දෙපාර්තුමේන්තු",
        "viewMoreAgeRange" : "තවත් බලන්න | වයස් සීමාවන්",
        "viewMoreFactors" : "තවත් බලන්න | සාධක",
        
        //Analytica Designer Page
        //Predictive Analytic Page
        //Lock Screen Page
        //About Us Page
        //Contact Us Page
        //FAQ Page
        //Login Page
    },
    "tamil": {
        "menu_dashboard": "கட்டுப்பாட்டு அறை",
        "menu_visualCharts": "வரைபடங்கள்",
        "menu_analytical" : "பகுப்பாய்வு வடிவமைப்பாளர்",
        "menu_predictive" : "முன்னறிவிக்கும் பகுப்பாய்வு",
        "menu_extra" : "கூடுதல்",
        "menu_lockScreen" : "பூட்டு திரை",
        "menu_faq" : "கேள்விகள்",
        "menu_about_us" : "எங்களை பற்றி",
        "menu_contact_us" : "எங்களை தொடர்பு",
        
        //Index Page
        "home" : "வீட்டில்",
        "semiHead" : "புள்ளியியல் மற்றும் மேலும்",
        "viewMore" : "மேலும் பார்க்க",
        "viewMoreDept" : "மேலும் பார்க்க | துறை",
        "viewMoreAgeRange" : "மேலும் பார்க்க | வயது வரம்பு",
        "viewMoreFactors" : "மேலும் பார்க்க | காரணிகள்",
        //Analytica Designer Page
        //Predictive Analytic Page
        //Lock Screen Page
        //About Us Page
        //Contact Us Page
        //FAQ Page
        //Login Page
    }
};

$(function () {
    // Function for swapping dictionaries
    set_lang = function (dictionary) {
        $("[data-translate]").text(function () {
            var key = $(this).data("translate");
            if (dictionary.hasOwnProperty(key)) {
                return dictionary[key];
            }
        });
    };

    // Swap languages when menu changes
    $("#languageSelect").on("change", function () {
        var language = $(this).val().toLowerCase();
        if (dictionary.hasOwnProperty(language)) {
            set_lang(dictionary[language]);
        }
    });

    // Set initial language to English
    set_lang(dictionary.english);
});


