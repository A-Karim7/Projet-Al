package metier;

import java.util.Date;

public class Articles {
	private String titre;
	private String contenu;
	private String categorie;
	private Date datePublication;
	
	
	public String getContenu() {
		return contenu;
	}
	public void setContenu(String contenu) {
		this.contenu = contenu;
	}
	public String getCategorie() {
		return categorie;
	}
	public void setCategorie(String i) {
		this.categorie = i;
	}
	public String getTitre() {
		return titre;
	}
	public void setTitre(String titre) {
		this.titre = titre;
	}
	public Date getDatePublication() {
		return datePublication;
	}
	public void setDatePublication(Date datePublication) {
		this.datePublication = datePublication;
	}
	
	

}
