<?php
class PaginatorHelper {

	public static function paginate($base_url, $query_str, $total_pages, $current_page, $paginate_limit) {
		// Array to store page link list
		$page_array = array();
		// Show dots flag - where to show dots?
		$dotshow = true;
		// walk through the list of pages
		for ($i = 1; $i <= $total_pages; $i++) {
			// If first or last page or the page number falls
			// within the pagination limit
			// generate the links for these pages
			if ($i == 1 || $i == $total_pages || ($i >= $current_page - $paginate_limit && $i <= $current_page + $paginate_limit)) {
				// reset the show dots flag
				$dotshow = true;
				// If it's the current page, leave out the link
				// otherwise set a URL field also
				$page_array[$i]['url'] = $base_url . $query_str . $i;
				$page_array[$i]['text'] = strval($i);
			}
			// If ellipses dots are to be displayed
			// (page navigation skipped)
			else if ($dotshow == true) {
				// set it to false, so that more than one
				// set of ellipses is not displayed
				$dotshow = false;
				$page_array[$i]['text'] = "...";
			}
		}
		// return the navigation array
		return $page_array;
	}

}
