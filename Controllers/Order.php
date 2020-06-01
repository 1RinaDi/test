<?php
    class Orders{
        public static function CalcNDS(){
            $SQL =
                "select sum(цена) as Сумма, sum(цена)*0.2 as НДС
                from orders";
            return DB::Execute($SQL, []);
        }
    }