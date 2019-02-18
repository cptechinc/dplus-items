<?php
	/** Include / Alias Internal Libraries / Classes */
	use Dplus\ProcessWire\DplusWire;
	use Dplus\Base\MagicMethodTraits;
	use Dplus\Base\ThrowErrorTrait;
	use Dplus\Base\CreateFromObjectArrayTraits;
	use Dplus\Base\CreateClassArrayTraits;

	/**
	 * Class for dealing with Item Master Products / Items
	 */
	class ItemMasterItem {
		use MagicMethodTraits;
		use ThrowErrorTrait;
		use CreateFromObjectArrayTraits;
		use CreateClassArrayTraits;

		/**
         * Item ID / Item Nbr
         * @var string
         */
		protected $itemid;
		
		/**
		 * Item Name
		 * @var string
		 */
		protected $name1;
		
		/**
		 * Item Name 2
		 * @var string
		 */
		protected $name2;
		
		/**
		 * Short Description
		 * @var string
		 */
		protected $shortdesc;
		
		/**
		 * Family ID
		 * @var string
		 */
		protected $familyid;
		
		/**
		 * Image File
		 * @var string
		 */
		protected $image;
		
		/**
		 * Category ID
		 * @var string
		 */
		protected $categoryid;
		
		/**
		 * Table View
		 * @var string
		 */
		protected $tview;
		
		/**
		 * Item Group
		 * @var string
		 */
		protected $itemgroup;
		
		/**
		 * Item Type
		 * @var string
		 */
		protected $itemtype;
		
		/**
		 * Dummy Field
		 *
		 * @var string
		 */
		protected $dummy;
		
		/**
		 * Qty for Inner Pack
		 * @var int
		 */
		protected $innerpackqty;
		
		/**
		 * Qty for Outer Pack
		 * @var int
		 */
		protected $outerpackqty;

		/* ============================================================
			GETTER FUNCTIONS
		============================================================ */
		/**
         * Returns if Item is a serialized item
         * @return bool
         */
        public function is_serialized() {
            return $this->itemtype == 'S';
        }

        /**
         * Returns if Item is a lotted item
         * @return bool
         */
        public function is_lotted() {
            return $this->itemtype == 'L';
        }

        /**
         * Returns if Item is a Normal Inventory item
         * @return bool
         */
        public function is_normal() {
            return $this->itemtype == 'N';
        }

        /**
         * Returns if Item is a Normal Inventory item
         * @return bool
         */
        public function is_priceonly() {
            return $this->itemtype == 'P';
		}
		
		/* =============================================================
		    CRUD FUNCTIONS
		============================================================ */
		/**
		 * Returns ItemMasterItem
		 *
		 * @param  string         $itemid  Item ID
		 * @param  bool           $debug   Run in Debug? If true, will return SQL Query
		 * @return ItemMasterItem
		 */
		public static function load($itemid, $debug = false) {
			return get_item_im($itemid, $debug);
		}
	}
