ԭΪ��
$this->assign('player_js', '<script src="' . MAC_PATH . 'static/js/playerconfig.js"></script><script src="' . MAC_PATH . 'static/js/player.js"></script>');
����Ϊ��
$this->assign('player_js', '<script src="' . MAC_PATH . 'static/js/playerconfig.js?'. date("Ymdhis") . '"></script><script src="' . MAC_PATH . 'static/js/player.js?'. date("Ymdhis") . '"></script>');