<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application home screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['title'] = "Welcome";

        $data['featured'] = $this->get_featured();
        $data['overview'] = $data['featured']['0']['description'];

        $data['sofar'] = $data['featured']['so_far'];

        $data['more_news'] = $this->get_all('All');
        $data['tags'] = $this->get_tags();
        $data['major'] = array_slice($data['featured'], 1);

        $data['helplines'] = array();
        $data['supportgroups'] = array();
        $data['socialmedias'] = array();
        $data['counties'] = array("KIAMBU", "KIRINYAGA", "MARAGUA", "MURANGA", "NYANDARUA", "NYERI", "THIKA", "KILIFI", "KWALE", "LAMU", "MALINDI", "MOMBASA", "TAITA TAVETA", "TANA RIVER", "CENTRAL MERU", "EMBU", "ISIOLO", "KITUI", "MACHAKOS", "MAKUENI", "MARSABIT", "MBEERE", "MOYALE", "MWINGI", "NORTH MERU", "SOUTH MERU", "THARAKA", "GARISSA", "MANDERA", "WAJIR", "NAIROBI", "BONDO", "GUCHA", "HOMA BAY", "KISII CENTRAL", "KISII NORTH", "KISUMU", "KURIA", "MIGORI", "NYANDO", "RACHUONYO", "SIAYA", "SUBA", "BARINGO", "BOMET", "BURET", "KAJIADO", "KEIYO", "KERICHO", "KOIBATEK", "LAIKIPIA", "MARAKWET", "NAKURU", "NANDI", "NAROK", "SAMBURU", "TRANS MARA", "TRANS-NZOIA", "TURKANA", "UASIN GISHU", "WEST POKOT", "BUNGOMA", "BUSIA", "BUTERE/MUMIAS", "KAKAMEGA", "LUGARI/MALAVA", "MOUNT ELGON", "TESO", "VIHIGA", "DIST", "DISTRICT", "TRANSMARA");
        $data['towns'] = array("NAIROBI",
            "KAWANGWARE",
            "KISERIAN",
            "RIRUTA",
            "KIAMBU",
            "RUARAKA",
            "DANDORA",
            "BURUBURU",
            "RONGAI",
            "MAGADI",
            "NGONG",
            "KIJABE",
            "KIKUYU",
            "LIMURU",
            "TIGONI",
            "GITHUNGURI",
            "NYAHURURU",
            "NYERI",
            "KARATINA",
            "KANGEMA",
            "KIRIAINI",
            "NANYUKI",
            "MURANGA",
            "MWEIGA",
            "OL'KALOU",
            "OTHAYA", "KIWAMBA", "THIKA", "GATUNDU", "RUIRU", "SAGANA", "MARAGUA", "MARALAL", "WAMBA VIA MARALAL", "ISIOLO", "TIMAU", "MOMBASA", "KALOLENI", "RABAI", "MTWAPA", "KWALE", "WUNDANYI", "TAVETA", "VOI", "MWATATE", "DIANI BEACH", "KINANGO", "LIKONI", "MSAMBWENI", "DIANI-MOMBASA", "UKUNDA", "MALINDI", "HOLA", "KILIFI", "KIPINI", "LAMU", "MPEKETONI", "TARASAA", "EMBU", "KERUGOYA", "WANGURU", "RUNYENJE'S", "ISHIARA", "KERUGUYA", "SIAKAGO", "RUNYENJES");
        $data['specialties'] = array("Antenatal Care (care of mother while pregnant)", "Anteretroviral Therapy ( drugs for HIV)", "Beoc", "Blood", "Caeserean section", "Ceoc", "C-IMCI", "Epidemiology ( study of disease spread and distribution)", "Family planning", "GROWM", "Heamogram ( blood test checking all blood parameters)", "Heamatocrit ( simple blood test to analyse anaemia)", "In- patient department", "Out -patient department", "Outreach programs ie. go out and give treatment in the villages", "Prevention of mother to child transmission ( of HIV/AIDS)", "Radiology/ x-ray", "Reproductive health treatment center/diagnostic center ( I think need to confirm)", "Tuberculosis diagnosis", "Tuberculosis treatment", "Youth", "Tuberculosis laboratory work up");

        /*
        $this->load->view('layout/header.php', $data);
        $this->load->view('layout/header_widgets.php', $data);
        $this->load->view('frontpage', $data);
        $this->load->view('layout/footer.php');
        */

        return view('frontpage', $data);
    }

    public function filter_feed(){
        $section = $_POST['section'];

        $this->load->model('welcome_m');

        $data['filtered_feed'] = $this->get_all($section);
        $data['title'] = $section;
        $this->load->view('filtered', $data);
    }

    public function get_tags(){
        $feed_url = public_path().'/cron/feed.json';//$this->config->item('feed_url');
        $feed = json_decode(file_get_contents($feed_url, true));

        $items = $feed->tags;
        $items = (array)$items;

        arsort($items);

        return $items;
    }

    public function get_all($section){
        $feed_url = public_path().'/cron/feed.json';//$this->config->item('feed_url');
        $news = array();
        $feed = json_decode(file_get_contents($feed_url, true));
        $items = $feed->nodes;

        foreach($items as $item){
            $item = $item->node;

            $newitem = $this->format_item($item);

            $tags = $newitem['tags'];


            if(($section=="All")){
                $news[] = $newitem;

            }else{

                if(in_array($section, $tags)){
                    $news[] = $newitem;
                }

            }

        }

        return $news;
    }

    public function format_item($item){
        $newitem = array();

        $newitem['id'] = $item->nid;

        $newitem['relevance'] = 0;

        $newitem['similar_tags'] = 0;

        $newitem['link'] = "http://the-star.co.ke" . $item->path;//str_replace('/news/', 'http://the-star.co.ke/news/', $item->path);

        $newitem['title'] = $item->title;

        $newitem['tags'] = $item->sorted_tags;

        $newitem['description'] = $this->first_paragraph($item->body);

        $newitem['timestamp'] = $item->created;

        $newitem['author'] =$item->field_author;

        $newitem['theme'] = $item->theme;

        if(isset($item->field_image)){

            $field_image = $item->field_image;

            //check if is array
            if(is_array($field_image)){
                $field_image = $field_image[0];
            }

            if(property_exists($field_image, "src")){

                $newitem['thumb'] = $field_image->src;

            }else{

                $newitem['thumb'] = null;
            }


        }else{

            $newitem['thumb'] = null;

        }
        return $newitem;
    }

    public function get_featured(){
        $feed_url = public_path().'/cron/feed.json';//$this->config->item('feed_url');
        $news = array();
        $feed = json_decode(file_get_contents($feed_url, true));
        $items = $feed->nodes;

        $i = 0;

        foreach($items as $item){
            $item = $item->node;
            $newitem = $this->format_item($item);
            if($newitem['thumb']!=null){

                $news[] = $newitem;

                if($i ==0 ){
                    $news['so_far'] = $this->get_story_so_far($newitem['theme'], $newitem['id']);
                }
                $i++;
            }
        }

        return $news;
    }

    public function get_thumbnail($thumb){
        $thumb = explode(',', $thumb);
        return $thumb[0];
    }
    public function first_paragraph($string){

        //$string = explode("</p>", $string);
        //if(sizeof($string)>0){
        //	$newstring = $string[0]."</p>";
        //}else{
        //return only first two sentences
        //now split the first bit using fullstops
        //$string = explode(". ", str_replace('&nbsp;', ' ', $string[0]));
        $string = explode(".", $string);
        //then combine parts
        if(sizeof($string)>1){
            $newstring = $string[0].'. '.$string[1].'.';
        }else{
            $newstring = $string[0];
        }
        //}
        //TODO: find way to leave some tags like <i>, <b>, <a>...
        return strip_tags($newstring);
    }
    public function get_story_so_far($theme, $featured_id){
        $stories = $this->get_all('All');

        $articles = array();

        $total_tags = count((array)$theme);

        foreach($theme as $key=>$value){

            foreach($stories as $item){
                //skip the featured one itself
                if(($featured_id != $item['id'])){

                    //check if story has theme
                    if(property_exists($item['theme'], $key)){

                        //check if article already added
                        if(!array_key_exists($item['id'], $articles)){
                            //if not added else, add article, set closeness
                            $articles[$item['id']] = $item;
                            $articles[$item['id']]['similar_tags'] = 0;
                            $articles[$item['id']]['relevance'] = 0;
                        }

                        //edit closeness(average or sum?)
                        $articles[$item['id']]['relevance'] = $articles[$item['id']]['relevance'] + $item['theme']->$key;

                    }
                }
            }

            $total_tags--;

        }
        //sort articles by closeness

        $closeness = array();
        foreach ($articles as $key => $row)
        {
            $closeness[$key] = $row['relevance'];
        }
        array_multisort($closeness, SORT_DESC, $articles);

        return $articles;
    }

}
