<?php 
    class ExampleBehavior extends ModelBehavior {

        public function setup(&$model, $config = array()) {
            $this->settings[$model->alias] = $config;
        }

        public function beforeFind(&$model, $query) {
            return $query;
        }

        public function afterFind(&$model, $results, $primary) {

        }

        public function beforeDelete(&$model, $cascade = true) {
            return true;
        }

        public function afterDelete(&$model) {

        }

        public function beforeValidate(&$model) {
            return true;
        }

    }
 ?>