class Pokemon {
    public $nome;
    public $tipo;
    public $livello;
    public $hp;
    public $attacco;

    public function __construct($nome, $tipo, $livello, $hp, $attacco) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->livello = $livello;
        $this->hp = $hp;
        $this->attacco = $attacco;
    }

    public function attacca($avversario) {
        return "$this->nome attacca $avversario";
    }

    public function aumentaLivello() {
        $this->livello++;
    }

    public function mostraDettagli() {
        return "Nome: $this->nome, Tipo: $this->tipo, Livello: $this->livello, HP: $this->hp, Attacco: $this->attacco";
    }
}
