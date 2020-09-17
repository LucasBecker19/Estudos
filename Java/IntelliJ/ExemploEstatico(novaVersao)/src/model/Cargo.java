package model;

public class Cargo {
    private String descricao;
    private float pisoSalarial;

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public float getPisoSalarial() {
        return pisoSalarial;
    }

    public void setPisoSalarial(float pisoSalarial) {
        this.pisoSalarial = pisoSalarial;
    }

    public float reajustarPiso (int taxa)
    {
        return this.pisoSalarial += (this.pisoSalarial*taxa);
    }

    public Cargo (String descricao, float pisoSalarial)
    {
        this.descricao = descricao;
        this.pisoSalarial = pisoSalarial;
    }
}
