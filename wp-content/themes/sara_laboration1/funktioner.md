// Hooks (Actions och Filters)
add_action(); // Lägger till en funktion som körs vid en specifik action hook.
add_filter(); // Modifierar data eller beteende genom en filter hook.
remove_action(); // Tar bort en funktion som är kopplad till en action hook.
remove_filter(); // Tar bort en funktion kopplad till en filter hook.

// Tema och stöd
add_theme_support(); // Aktiverar stöd för en specifik temafunktion (t.ex. post thumbnails, custom logo).
remove_theme_support(); // Inaktiverar stöd för en temafunktion.

// Kropps- och klassrelaterade funktioner
body_class(); // Lägger till CSS-klasser till <body>-taggen baserat på sidtyp eller kontext.
wp_body_open(); // Skapar en hook direkt efter <body>-taggen (bra för extra innehåll eller kod).

// Navigering och menyer
register_nav_menu(); // Registrerar en menyplats i temat.
wp_nav_menu(); // Visar en navigationsmeny baserad på registrerade menyer.

// Sidofält och widgets
register_sidebar(); // Registrerar en widgetyta (sidebar).
dynamic_sidebar(); // Visar innehållet från en registrerad widgetyta.
disable_block_widgets(); // Inaktiverar blockwidgets och återgår till klassiska widgets.

// Metadata och inläggsinformation
get_the_author_posts_link(); // Hämtar en länk till författarens inläggsarkiv.
get_the_category_list(); // Hämtar en lista med kategorier för ett inlägg.
get_the_date(); // Hämtar publiceringsdatumet för ett inlägg.
the_date(); // Visar publiceringsdatumet för ett inlägg.
the_category(); // Visar kategorier för det aktuella inlägget.

// Utdrag (Excerpt)
the_excerpt(); // Visar ett kort utdrag från inlägget.


// Sidhuvud och sidfot
get_header(); // Hämtar header-filen (vanligtvis header.php).
get_footer(); // Hämtar footer-filen (vanligtvis footer.php).
wp_head(); // Lägger till skript och metadata i <head>.
wp_footer(); // Lägger till skript och annat innehåll innan </body>.

// Funktioner för formulär och sökning
get_search_form(); // Hämtar och visar ett sökformulär.
the_search_query(); // Visar sökfrasen från en sökning.
home_url(); // Hämtar URL:en till hemsidan.

// Övriga funktioner för inlägg och innehåll
the_title(); // Visar titeln på det aktuella inlägget.
the_content(); // Visar innehållet i det aktuella inlägget.
the_permalink(); // Visar länken till det aktuella inlägget.
the_post_thumbnail_url(); // Hämtar URL:en för inläggets featured image.
the_post(); // Laddar in data för det aktuella inlägget i loop.
have_posts(); // Kontrollera om det finns fler inlägg att visa (används i loopar).
while(); // Itererar genom varje inlägg i en loop.

// Sidindelning och navigering
get_the_posts_pagination(); // Genererar sidindelningslänkar för flersidiga listor.
labb1_navigation_markup_template(); // Anpassad funktion för att ändra utseendet på navigeringens markup.


labb1_gratis_cleanup_head(); // Anpassad funktion för att ta bort onödig metadata från <head>.

// URL- och metadatafunktioner
get_bloginfo(); // Hämtar metadata för webbplatsen, som titel eller URL.
get_template_directory_uri(); // Hämtar URL:en till temakatalogen.
home_url(); // Hämtar bas-URL för webbplatsen.

// Verktygsfunktioner
in_array(); // Kontrollera om ett värde finns i en array (vanlig PHP-funktion).
function(); // Definierar en ny funktion i PHP.
single_post_title(); // Hämtar titeln på det aktuella inlägget för enkel användning.

// Anpassning och inladdning av resurser
wp_enqueue_style(); // Laddar in en CSS-fil.
wp_dequeue_style(); // Tar bort en CSS-fil från kölistan.
wp_enqueue_script(); // Laddar in en JavaScript-fil.


 De funktioner som börjar med labb_1 är till för olika action/filter i functions.php. Kroknamnen är samma som slutet på funktionerna.
 // Temaspecifika funktioner
labb1_after_setup_theme(); // Anpassad funktion för att köra kod vid temat initialization.
labb1_widgets_init(); // Anpassad funktion för att registrera widgets i temat.
labb1_wp_enqueue_scripts(); // Anpassad funktion för att ladda in CSS och JavaScript i temat.
labb1_excerpt_length(); // En anpassad funktion för att ändra längden på utdrag.
labb1_excerpt_more(); // En anpassad funktion för att ändra "läs mer"-texten i utdrag.
