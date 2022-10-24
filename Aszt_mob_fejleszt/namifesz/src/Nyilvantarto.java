import java.util.ArrayList;
import java.util.Arrays;

public class Nyilvantarto implements Nev{

    @Override
    public ArrayList<String> getNames() {
        String[] nevek = {"Béla", "Géza"};
        ArrayList<String>nevLista=new ArrayList<>(Arrays.asList(nevek));
        return nevLista;
    }
    
}
