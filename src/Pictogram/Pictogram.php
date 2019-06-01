<?PHP

namespace Pictogram;

use pocketmine\plugin\PluginBase;

class Pictogram extends PluginBase {

    private static $instance = null;

    public static function getInstance() {
        return self::$instance;
    }

    public function onLoad() {
        self::$instance = $this;
    }

    public function onEnable() {
        @mkdir($this->getDataFolder());
    }

    public function getImagePath(string $name) {
        switch ($name) {
            case "길드":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EA%B8%B8%EB%93%9C.png?raw=true";
            case "길찾기":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EA%B8%B8%EC%B0%BE%EA%B8%B0.png?raw=true";
            case "닫기":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EB%8B%AB%EA%B8%B0.png?raw=true";
            case "사용자 설정":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%82%AC%EC%9A%A9%EC%9E%90%EC%84%A4%EC%A0%95.png?raw=true";
            case "사유지":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%82%AC%EC%9C%A0%EC%A7%80.png?raw=true";
            case "스킬":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%8A%A4%ED%82%AC.png?raw=true";
            case "스탯":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%8A%A4%ED%83%AF.png?raw=true";
            case "신고":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%8B%A0%EA%B3%A0.png?raw=true";
            case "쓰레기통":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%93%B0%EB%A0%88%EA%B8%B0%ED%86%B5.png?raw=true";
            case "장비 장착":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%9E%A5%EB%B9%84%EC%9E%A5%EC%B0%A9.png?raw=true";
            case "전리품":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%A0%84%EB%A6%AC%ED%92%88.png?raw=true";
            case "채팅":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%B1%84%ED%8C%85.png?raw=true";
            case "추가정보":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%B6%94%EA%B0%80%EC%A0%95%EB%B3%B4.png?raw=true";
            case "친구":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%B9%9C%EA%B5%AC.png?raw=true";
            case "칭호":
                return "https://github.com/Mial7208/Pictogram/blob/master/%EC%B9%AD%ED%98%B8.png?raw=true";
            case "퀘스트":
                return "https://github.com/Mial7208/Pictogram/blob/master/%ED%80%98%EC%8A%A4%ED%8A%B8.png?raw=true";
            case "크레딧":
                return "https://github.com/Mial7208/Pictogram/blob/master/%ED%81%AC%EB%A0%88%EB%94%A7.png?raw=true";
            case "파티":
                return "https://github.com/Mial7208/Pictogram/blob/master/%ED%8C%8C%ED%8B%B0.png?raw=true";
            case "프로필":
                return "https://github.com/Mial7208/Pictogram/blob/master/%ED%94%84%EB%A1%9C%ED%95%84.png?raw=true";
            default:
                return null;
        }
    }
}
