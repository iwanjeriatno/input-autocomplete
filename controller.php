    public function item()
    {
        $searchTerm = $_GET['term'];
        $subject = Barang::select('items.id','items.item_code','items.item_name')
                    ->where('items.item_code', 'LIKE', "%$searchTerm%")
                    ->get();

        $data = array();
        foreach ($subject as $key => $value) {
            $data[] = $value->item_code.' - '.$value->item_name;
        }

        return response()->json($data);
    }
