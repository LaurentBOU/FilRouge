<?php

class User
{

    private $id;
    private $avatar;
    private $civilite;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $tel;
    private $mail;
    private $adresse;
    private $complement_adresse;
    private $code_postal;
    private $ville;
    private $pays;
    private $pseudo;
    private $password;

    public function __construct($id, $avatar, $civilite, $nom, $prenom, $date_naissance, $tel, $mail, $adresse, $complement_adresse, $code_postal, $ville, $pays, $pseudo, $password)
    {
        $this->id = $id;
        $this->avatar = $avatar;
        $this->civilite = $civilite;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->tel = $tel;
        $this->mail = $mail;
        $this->adresse = $adresse;
        $this->complement_adresse = $complement_adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->pseudo = $pseudo;
        $this->password = $password;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return htmlspecialchars($this->id);
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of avatar
     */
    public function getAvatar()
    {
        return htmlspecialchars($this->avatar);
    }

    /**
     * Set the value of avatar
     *
     * @return  self
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get the value of civilite
     */
    public function getCivilite()
    {
        return htmlspecialchars($this->civilite);
    }

    /**
     * Set the value of civilite
     *
     * @return  self
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return htmlspecialchars($this->nom);
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return htmlspecialchars($this->prenom);
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of date_naissance
     */
    public function getDate_naissance()
    {
        return htmlspecialchars($this->date_naissance);
    }

    /**
     * Set the value of date_naissance
     *
     * @return  self
     */
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return htmlspecialchars($this->tel);
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return htmlspecialchars($this->mail);
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return htmlspecialchars($this->adresse);
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of complement_adresse
     */
    public function getComplement_adresse()
    {
        return htmlspecialchars($this->complement_adresse);
    }

    /**
     * Set the value of complement_adresse
     *
     * @return  self
     */
    public function setComplement_adresse($complement_adresse)
    {
        $this->complement_adresse = $complement_adresse;

        return $this;
    }

    /**
     * Get the value of code_postal
     */
    public function getCode_postal()
    {
        return htmlspecialchars($this->code_postal);
    }

    /**
     * Set the value of code_postal
     *
     * @return  self
     */
    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return htmlspecialchars($this->ville);
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of pays
     */
    public function getPays()
    {
        return htmlspecialchars($this->pays);
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of pseudo
     */
    public function getPseudo()
    {
        return htmlspecialchars($this->pseudo);
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return htmlspecialchars($this->password);
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
