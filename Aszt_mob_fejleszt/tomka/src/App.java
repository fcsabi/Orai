import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.LinkedList;

public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Hello, World!");
        String[]nevek={"Dani","Geri","Pali","Zoli"};
        ArrayList<String>nevLista=new ArrayList<>(Arrays.asList(nevek));
        System.out.println(nevLista.get(0));


        LinkedList<String>targyak=new LinkedList<>();
        targyak.add("Szék");
        targyak.add("Asztal");
        System.out.println(targyak);
    }
}
